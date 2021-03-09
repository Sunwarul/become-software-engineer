# Play with Tailwind CSS

**Installation**

```javascript
mkdir myapp
cd myapp
npm init -y
npm install -D tailwindcss@latest postcss@latest autoprefixer@latest

```
These commands will create a directory called `myapp` initialize a `package.json` file and install all `dev` dependencies. After these your `package.json` fill will have these dev-dependencies:

```

// package.json 
"devDependencies": {
    "autoprefixer": "^10.2.5",
    "postcss": "^8.2.7",
    "tailwindcss": "^2.0.3"
  }

```
Then run this command to initalize with default configurations
```
npx tailwindcss init

```
`tailwind.config.js` will generated. Then create a `css` directory and a css file `css/styles.css` with these commands. 
```
mkdir css && cd css
touch styles.css
```
Insert these snippet into that file
```
// css/styles.css
@tailwind base;
@tailwind components;
@tailwind utilities;

```
You may chanage your configuration `purge` to minify your build css file, this way - 
```
// tailwind.config.js
module.exports = {
   purge: [
     './src/**/*.html',
     './src/**/*.js',
   ],
```

**Build from CLI**

```bash
npx tailwindcss-cli@latest build ./src/css/styles.css -o ./dist/output.css
```

**Adding a build script**

```json
// package.json  
"scripts": {
   "build" : "npx tailwindcss-cli@latest build ./src/css/styles.css -o ./dist/output.css"
 },
```

Run `yarn build` OR `npm run build` to build

**Add `dist/ouptut.css` into HTML**

```html
<!DOCTYPE html>
<html>
<head>
	<title>Simple Tailwind Template</title>
	<link rel="stylesheet" type="text/css" href="../dist/output.css" />
</head>
<body>
	<button type="button" class="btn bg-blue-500 px-5 py-2.5 text-white">Login</button>
</body>
</html>
```

Now guess what! Just open that `html` file with a browser! 
