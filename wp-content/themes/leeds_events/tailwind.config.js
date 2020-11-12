const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    future: {
        // removeDeprecatedGapUtilities: true,
        // purgeLayersByDefault: true,
    },
    purge: {
        content: [
            './resources/**/*.vue',
            './resources/**/*.scss',
            '/public/**/*.html',
        ],
    },
    theme: {
        variants: {
            display: ['responsive', 'hover'],
        },
        borderRadius: {
            'none': '0',
            'sm': '0.125rem',
            'md': '0.375rem',
            'lg': '0.5rem',
            'full': '9999px',
            'xl': '2.5rem',
            },
        extend: {
            colors:{
                thumbnail: 'rgba(0,0,0,0.45)',
            },
            fontFamily: {
                sans: [
                    'Lato',
                    ...defaultTheme.fontFamily.sans,
                ]
            },

        },
    },
    variants: {},
    plugins: [],
}
