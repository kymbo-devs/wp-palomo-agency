import domReady from '@roots/sage/client/dom-ready';
import {components} from './components.js';

/**
 * Application entrypoint
 */
domReady(async () => {
  components();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
