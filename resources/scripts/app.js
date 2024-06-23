import domReady from '@roots/sage/client/dom-ready';
import {components} from './components.js';
// import function to register Swiper custom elements
import { register } from 'swiper/element/bundle';

/**
 * Application entrypoint
*/
domReady(async () => {
  // register Swiper custom elements
  register();
  components();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
