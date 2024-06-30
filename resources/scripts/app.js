import domReady from '@roots/sage/client/dom-ready';
import {components} from './components.js';
import { animations } from './animations.js';

/**
 * Application entrypoint
*/
domReady(async () => {
  // register GSAP, ScrollTrigger and TextPlugin
  gsap.registerPlugin(ScrollTrigger);
  gsap.registerPlugin(TextPlugin)
  // Load Custom web components
  components();
  // Load component animations
  animations();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
