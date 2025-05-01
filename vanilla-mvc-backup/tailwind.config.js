/**
 * Tailwind Configuration File
 *
 * Filename:        tailwind.config.js
 * Location:        /
 * Project:         SaaS-Vanilla-MVC
 * Date Created:    20/08/2024
 *
 * Author:          Your Name
 */

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
		"./App/views/**/*.php",  
		"./src/templates/**/*.html",  
		"./public/**/*.html"
	],
    theme: {
        extend: {},
    }
}