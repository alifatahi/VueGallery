import Home from "./components/Home";
import Allegory from "./components/Allegory";
import Bodegón from "./components/Bodegón";
import FigurePainting from "./components/FigurePainting";
import IllustrationPainting from "./components/IllustrationPainting";
import LandscapePainting from "./components/LandscapePainting";
import PortraitPainting from "./components/PortraitPainting";
import StillLife from "./components/StillLife";
import Veduta from "./components/Veduta";
import NotFound from "./components/NotFound";

export default {
    mode: 'history',
    linkActiveClass: 'font-bold',
    routes: [
        {
          path:'*',
          component: NotFound,
        },
        {
            path: '/',
            component: Home,
            name: 'home'
        }, {
            path: '/allegory',
            component: Allegory,
            name: 'allegory'
        }, {
            path: '/bodegón',
            component: Bodegón,
            name: 'bodegón'
        }, {
            path: '/figure-painting',
            component: FigurePainting,
            name: 'figurePainting'
        }, {
            path: '/illustration-painting',
            component: IllustrationPainting,
            name: 'illustrationPainting'
        }, {
            path: '/landscape-painting',
            component: LandscapePainting,
            name: 'landscapePainting'
        }, {
            path: '/portrait-painting',
            component: PortraitPainting,
            name: 'portraitPainting'
        }, {
            path: '/still-life',
            component: StillLife,
            name: 'stillLife'
        }, {
            path: '/veduta',
            component: Veduta,
            name: 'veduta'
        }
    ]
}