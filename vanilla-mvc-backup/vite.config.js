import { defineConfig } from 'vite';  
import tailwindcss from '@tailwindcss/vite';  
  
export default defineConfig({  
    plugins: [  
        tailwindcss(),  
        usePHP({  
            entry: [  
                'index.php',  
                'public/index.{html,php,js}',  
                'App/views/**/*.{html,php,js}'  
            ],  
        }),  
        liveReload([  
                'index.php',  
                'public/index.{html,php,js}',  
                'App/views/**/*.{html,php,js}'  
            ],  
            {  
                alwaysReload: true  
            }  
        ),  
    ],
    server: {  
        watch: {  
            usePolling: true,  
        },  
        hmr: true,  
        proxy: {  
            // Proxy PHP backend  
            '/': 'http://localhost:8000',  
        }  
    }  
});