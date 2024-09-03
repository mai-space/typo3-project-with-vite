import { defineConfig } from "vite";
import typo3 from "vite-plugin-typo3";

export default defineConfig({
    plugins: [typo3()],
    build: {
        // ...
        outDir: 'local_packages/alterations/Resources/Public/Vite/',
    }
});
