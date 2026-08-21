import { defineConfig } from "vite";
import { vitePluginManusRuntime } from "vite-plugin-manus-runtime";

const storageProxy = () => ({
  name: "storage-proxy",
  configureServer(server) {
    server.middlewares.use("/manus-storage", async (req, res) => {
      const filePath = req.url?.slice(1);
      const baseUrl = (process.env.BUILT_IN_FORGE_API_URL || "").replace(/\/$/, "");
      const token = process.env.BUILT_IN_FORGE_API_KEY;

      if (!filePath || !baseUrl || !token) {
        res.writeHead(404);
        return res.end("Imagem indisponível");
      }

      try {
        const url = new URL("v1/storage/presign/get", `${baseUrl}/`);
        url.searchParams.set("path", filePath);

        const response = await fetch(url, {
          headers: { Authorization: `Bearer ${token}` },
        });
        const { url: signedUrl } = await response.json();

        if (!response.ok || !signedUrl) throw new Error("Arquivo não encontrado");
        res.writeHead(307, { Location: signedUrl, "Cache-Control": "no-store" });
        return res.end();
      } catch {
        res.writeHead(502);
        return res.end("Não foi possível carregar a imagem");
      }
    });
  },
});

export default defineConfig({
  plugins: [storageProxy(), vitePluginManusRuntime()],
  build: { outDir: "dist/public", emptyOutDir: true },
  server: { host: true, port: 3000, strictPort: false },
});
