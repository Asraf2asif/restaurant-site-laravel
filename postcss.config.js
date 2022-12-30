module.exports = {
  plugins: {
    tailwindcss: {},
    autoprefixer: {},
    "postcss-will-change": {},
    "postcss-color-rgba-fallback": {},
    "postcss-opacity": {},
    "postcss-pseudoelements": {},
    "postcss-vmin": {},
    pixrem: {},
    "postcss-preset-env": {
      stage: 4,
    },
    cssnano: { preset: "default" },
  },
};
