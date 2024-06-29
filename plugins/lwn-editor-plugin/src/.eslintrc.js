module.exports = {
  env: {
    browser: true,
    commonjs: true,
    es2021: true,
    node: true,
    jquery: true,
  },
  extends: ['eslint:recommended', 'plugin:react/recommended'],
  parserOptions: {
    ecmaVersion: 'latest',
    sourceType: 'module',
    ecmaFeatures: {
      jsx: true,
    },
  },
  plugins: ['react'],
  rules: {
    'react/react-in-jsx-scope': 'off',
    'no-unused-vars': 'warn',
    // NextJs specific fix: suppress errors for missing 'import React' in files for nextjs
    // NextJs specific fix: allow jsx syntax in js files
    'react/jsx-filename-extension': [1, { extensions: ['.js', '.jsx'] }], //should add ".ts" if typescript project
    'react/display-name': 1,
    'react/prop-types': 'off',
    'no-modules': 'off',
    'react/no-unknown-property': [
      2,
      {
        ignore: ['jsx', 'global'],
      },
    ],
  },
};
