var _0x30d1=['move','#ffffff','top','rgba(0,\x200,\x200,\x200.5)','#ff8080','Game\x20Over!\x20\x20Your\x20Score:\x20','stringify','fillText','location','onclick','columns','bottom','open','/game/game.html','growsegments','prototype','clientY','#f7e697','requestAnimationFrame','grow','clearRect','confirm','16px\x20Verdana','segments','width','push','fillRect','tryMove','\x20images','generate','tiles','viewport','src','tileheight','Press\x20any\x20key\x20or\x20touch\x20the\x20screen\x20to\x20start!','left','Loaded\x20','addEventListener','#bcae76','getElementById','round','strokeStyle','random','drawImage','keydown','replace','clientX','lineWidth','24px\x20Verdana','speed','strokeRect','send','init','#000000','direction','onload','fillStyle','snake-graphics.png','nextMove','movedelay','Your\x20current\x20score:\x20','height','GET','keyCode','rows','length','font','directions','tilewidth'];(function(_0x687079,_0x30d103){var _0x456dc4=function(_0x5cf052){while(--_0x5cf052){_0x687079['push'](_0x687079['shift']());}};_0x456dc4(++_0x30d103);}(_0x30d1,0x7f));var _0x456d=function(_0x687079,_0x30d103){_0x687079=_0x687079-0x0;var _0x456dc4=_0x30d1[_0x687079];return _0x456dc4;};window['onload']=function(){var _0x2b63f8=document['getElementById'](_0x456d('0x2a'));var _0xad498f=_0x2b63f8['getContext']('2d');var _0x3de411=0x0;var _0x1ec44a=0x0;var _0xb4d415=0x0;var _0x1404c5=0x0;var _0x39d632=![];var _0x30bfbf=[];var _0x180704;var _0x860fd0=0x0;var _0x47ddde=0x0;var _0x5d9ac3=![];function _0x3a32ea(_0x5e818c){_0x860fd0=0x0;_0x47ddde=_0x5e818c[_0x456d('0x7')];_0x5d9ac3=![];var _0x39d3a8=[];for(var _0x47e9e3=0x0;_0x47e9e3<_0x5e818c[_0x456d('0x7')];_0x47e9e3++){var _0x24ef80=new Image();_0x24ef80[_0x456d('0x42')]=function(){_0x860fd0++;if(_0x860fd0==_0x47ddde){_0x5d9ac3=!![];}};_0x24ef80[_0x456d('0x2b')]=_0x5e818c[_0x47e9e3];_0x39d3a8[_0x47e9e3]=_0x24ef80;}return _0x39d3a8;}var _0x5c11c6=function(_0x5d37ba,_0x2f8c2f,_0x365890,_0x447a14){this[_0x456d('0x15')]=_0x5d37ba;this[_0x456d('0x6')]=_0x2f8c2f;this[_0x456d('0xa')]=_0x365890;this[_0x456d('0x2c')]=_0x447a14;this[_0x456d('0x29')]=[];for(var _0x14b6c1=0x0;_0x14b6c1<this['columns'];_0x14b6c1++){this[_0x456d('0x29')][_0x14b6c1]=[];for(var _0x222c24=0x0;_0x222c24<this[_0x456d('0x6')];_0x222c24++){this[_0x456d('0x29')][_0x14b6c1][_0x222c24]=0x0;}}};_0x5c11c6[_0x456d('0x1a')][_0x456d('0x28')]=function(){for(var _0x2b188f=0x0;_0x2b188f<this[_0x456d('0x15')];_0x2b188f++){for(var _0x27968c=0x0;_0x27968c<this[_0x456d('0x6')];_0x27968c++){if(_0x2b188f==0x0||_0x2b188f==this[_0x456d('0x15')]-0x1||_0x27968c==0x0||_0x27968c==this[_0x456d('0x6')]-0x1){this[_0x456d('0x29')][_0x2b188f][_0x27968c]=0x1;}else{this[_0x456d('0x29')][_0x2b188f][_0x27968c]=0x0;}}}};var _0x426af4=function(){this['init'](0x0,0x0,0x1,0xa,0x1);};_0x426af4[_0x456d('0x1a')][_0x456d('0x9')]=[[0x0,-0x1],[0x1,0x0],[0x0,0x1],[-0x1,0x0]];_0x426af4[_0x456d('0x1a')][_0x456d('0x3f')]=function(_0x591f42,_0x5a73bd,_0x146ba4,_0x22d924,_0xda0461){this['x']=_0x591f42;this['y']=_0x5a73bd;this['direction']=_0x146ba4;this[_0x456d('0x3c')]=_0x22d924;this[_0x456d('0x1')]=0x0;this[_0x456d('0x22')]=[];this[_0x456d('0x19')]=0x0;for(var _0x5739fd=0x0;_0x5739fd<_0xda0461;_0x5739fd++){this[_0x456d('0x22')][_0x456d('0x24')]({'x':this['x']-_0x5739fd*this[_0x456d('0x9')][_0x146ba4][0x0],'y':this['y']-_0x5739fd*this[_0x456d('0x9')][_0x146ba4][0x1]});}};_0x426af4[_0x456d('0x1a')][_0x456d('0x1e')]=function(){this[_0x456d('0x19')]++;};_0x426af4[_0x456d('0x1a')]['tryMove']=function(_0x3e2523){this['movedelay']+=_0x3e2523;var _0x5b4bbd=0x1/this[_0x456d('0x3c')];if(this['movedelay']>_0x5b4bbd){return!![];}return![];};_0x426af4[_0x456d('0x1a')][_0x456d('0x0')]=function(){var _0x4837e5=this['x']+this[_0x456d('0x9')][this[_0x456d('0x41')]][0x0];var _0x59be75=this['y']+this[_0x456d('0x9')][this['direction']][0x1];return{'x':_0x4837e5,'y':_0x59be75};};_0x426af4['prototype'][_0x456d('0xb')]=function(){var _0x39ce8b=this[_0x456d('0x0')]();this['x']=_0x39ce8b['x'];this['y']=_0x39ce8b['y'];var _0x5614fe=this[_0x456d('0x22')][this[_0x456d('0x22')]['length']-0x1];var _0x202218=_0x5614fe['x'];var _0x2ce64f=_0x5614fe['y'];for(var _0x1d8afb=this[_0x456d('0x22')]['length']-0x1;_0x1d8afb>=0x1;_0x1d8afb--){this[_0x456d('0x22')][_0x1d8afb]['x']=this[_0x456d('0x22')][_0x1d8afb-0x1]['x'];this[_0x456d('0x22')][_0x1d8afb]['y']=this[_0x456d('0x22')][_0x1d8afb-0x1]['y'];}if(this[_0x456d('0x19')]>0x0){this[_0x456d('0x22')][_0x456d('0x24')]({'x':_0x202218,'y':_0x2ce64f});this[_0x456d('0x19')]--;}this['segments'][0x0]['x']=this['x'];this[_0x456d('0x22')][0x0]['y']=this['y'];this[_0x456d('0x1')]=0x0;};var _0x3fe357=new _0x426af4();var _0x325aeb=new _0x5c11c6(0x14,0xf,0x20,0x20);var _0x4b4f33=0x0;var _0x369770=!![];var _0x32c1ad=0x1;var _0x34593f=0.5;var _0x5e768e=[];function _0x25dc1f(){_0x30bfbf=_0x3a32ea([_0x456d('0x44')]);_0x180704=_0x30bfbf[0x0];_0x2b63f8[_0x456d('0x30')]('mousedown',_0x56f189);document[_0x456d('0x30')](_0x456d('0x37'),_0x15334f);_0x3546c7();_0x4a73fd(0x0);}function _0x2ca60f(){if(_0x32c1ad>_0x34593f){_0x3546c7();_0x369770=![];}}function _0x3546c7(){_0x3fe357[_0x456d('0x3f')](0xa,0xa,0x1,0xa,0x4);_0x325aeb['generate']();_0x2a965a();_0x4b4f33=0x0;_0x369770=!![];}function _0x2a965a(){var _0x27b87a=![];while(!_0x27b87a){var _0x5c408c=_0x4a7d66(0x0,_0x325aeb['columns']-0x1);var _0x4c358d=_0x4a7d66(0x0,_0x325aeb[_0x456d('0x6')]-0x1);var _0x3ba629=![];for(var _0x37c927=0x0;_0x37c927<_0x3fe357[_0x456d('0x22')][_0x456d('0x7')];_0x37c927++){var _0x54d4a4=_0x3fe357[_0x456d('0x22')][_0x37c927]['x'];var _0x242e7a=_0x3fe357[_0x456d('0x22')][_0x37c927]['y'];if(_0x5c408c==_0x54d4a4&&_0x4c358d==_0x242e7a){_0x3ba629=!![];break;}}if(!_0x3ba629&&_0x325aeb[_0x456d('0x29')][_0x5c408c][_0x4c358d]==0x0){_0x325aeb[_0x456d('0x29')][_0x5c408c][_0x4c358d]=0x2;_0x27b87a=!![];}}}function _0x4a73fd(_0x5ab74a){window[_0x456d('0x1d')](_0x4a73fd);if(!_0x39d632){_0xad498f[_0x456d('0x1f')](0x0,0x0,_0x2b63f8[_0x456d('0x23')],_0x2b63f8[_0x456d('0x3')]);var _0x2ca98d=_0x860fd0/_0x47ddde;_0xad498f[_0x456d('0x34')]=_0x456d('0xf');_0xad498f[_0x456d('0x3a')]=0x3;_0xad498f[_0x456d('0x3d')](18.5,0.5+_0x2b63f8[_0x456d('0x3')]-0x33,_0x2b63f8[_0x456d('0x23')]-0x25,0x20);_0xad498f[_0x456d('0x43')]=_0x456d('0xf');_0xad498f[_0x456d('0x25')](18.5,0.5+_0x2b63f8[_0x456d('0x3')]-0x33,_0x2ca98d*(_0x2b63f8[_0x456d('0x23')]-0x25),0x20);var _0x59f168=_0x456d('0x2f')+_0x860fd0+'/'+_0x47ddde+_0x456d('0x27');_0xad498f['fillStyle']=_0x456d('0x40');_0xad498f[_0x456d('0x8')]=_0x456d('0x21');_0xad498f[_0x456d('0x12')](_0x59f168,0x12,0.5+_0x2b63f8[_0x456d('0x3')]-0x3f);if(_0x5d9ac3){_0x39d632=!![];}}else{_0x54a9ae(_0x5ab74a);_0x40d4ae();}}function _0x54a9ae(_0x5ea11f){var _0x2f4fe6=(_0x5ea11f-_0x3de411)/0x3e8;_0x3de411=_0x5ea11f;_0x484f69(_0x2f4fe6);if(!_0x369770){_0x39e3b9(_0x2f4fe6);}else{_0x32c1ad+=_0x2f4fe6;}}function _0x39e3b9(_0x37ca9b){if(_0x3fe357[_0x456d('0x26')](_0x37ca9b)){var _0x4f3fa2=_0x3fe357['nextMove']();var _0x21cc47=_0x4f3fa2['x'];var _0x4442ee=_0x4f3fa2['y'];if(_0x21cc47>=0x0&&_0x21cc47<_0x325aeb[_0x456d('0x15')]&&_0x4442ee>=0x0&&_0x4442ee<_0x325aeb[_0x456d('0x6')]){if(_0x325aeb[_0x456d('0x29')][_0x21cc47][_0x4442ee]==0x1){_0x369770=!![];_0x5e768e[_0x456d('0x24')](_0x4b4f33);}for(var _0x263edf=0x0;_0x263edf<_0x3fe357[_0x456d('0x22')][_0x456d('0x7')];_0x263edf++){var _0x1ed271=_0x3fe357[_0x456d('0x22')][_0x263edf]['x'];var _0xfaa5c4=_0x3fe357[_0x456d('0x22')][_0x263edf]['y'];if(_0x21cc47==_0x1ed271&&_0x4442ee==_0xfaa5c4){_0x369770=!![];_0x5e768e[_0x456d('0x24')](_0x4b4f33);break;}}if(!_0x369770){_0x3fe357[_0x456d('0xb')]();if(_0x325aeb[_0x456d('0x29')][_0x21cc47][_0x4442ee]==0x2){_0x325aeb[_0x456d('0x29')][_0x21cc47][_0x4442ee]=0x0;_0x2a965a();_0x3fe357['grow']();_0x4b4f33++;}}}else{_0x369770=!![];_0x5e768e[_0x456d('0x24')](_0x4b4f33);}if(_0x369770){_0x32c1ad=0x0;}}}function _0x484f69(_0xd048a0){if(_0x1ec44a>0.25){_0x1404c5=Math['round'](_0xb4d415/_0x1ec44a);_0x1ec44a=0x0;_0xb4d415=0x0;}_0x1ec44a+=_0xd048a0;_0xb4d415++;}function _0x40d4ae(){_0xad498f['fillStyle']='#577ddb';_0xad498f[_0x456d('0x25')](0x0,0x0,_0x2b63f8[_0x456d('0x23')],_0x2b63f8[_0x456d('0x3')]);_0x2833ad();_0x349bb3();if(_0x369770){_0xad498f[_0x456d('0x43')]=_0x456d('0xe');_0xad498f[_0x456d('0x25')](0x0,0x0,_0x2b63f8[_0x456d('0x23')],_0x2b63f8[_0x456d('0x3')]);_0xad498f[_0x456d('0x43')]=_0x456d('0xc');_0xad498f['font']=_0x456d('0x3b');_0x3cd128(_0x456d('0x2d'),0x0,_0x2b63f8[_0x456d('0x3')]/0x2,_0x2b63f8[_0x456d('0x23')]);_0xad498f['fillText'](_0x456d('0x2')+_0x4b4f33,_0x2b63f8['width']*0.545,_0x2b63f8['height']*0.125);}if(_0x5e768e[_0x456d('0x7')]==0x1){let _0x2a4207=window[_0x456d('0x20')](_0x456d('0x10')+_0x4b4f33);if(_0x2a4207){var _0xff7fc6=JSON[_0x456d('0x11')]({'sc':_0x4b4f33,'id':0x1});var _0x43a621=new XMLHttpRequest();_0x43a621[_0x456d('0x17')](_0x456d('0x4'),'/game/end_game.php?x='+_0xff7fc6,!![]);_0x43a621[_0x456d('0x3e')]();_0x5e768e[_0x456d('0x7')]=0x0;window[_0x456d('0x13')][_0x456d('0x38')](_0x456d('0x18'));}}}function _0x2833ad(){for(var _0x146188=0x0;_0x146188<_0x325aeb[_0x456d('0x15')];_0x146188++){for(var _0x3fc9ad=0x0;_0x3fc9ad<_0x325aeb[_0x456d('0x6')];_0x3fc9ad++){var _0xfac6b6=_0x325aeb[_0x456d('0x29')][_0x146188][_0x3fc9ad];var _0x2e39ba=_0x146188*_0x325aeb[_0x456d('0xa')];var _0x1215bf=_0x3fc9ad*_0x325aeb[_0x456d('0x2c')];if(_0xfac6b6==0x0){_0xad498f['fillStyle']=_0x456d('0x1c');_0xad498f[_0x456d('0x25')](_0x2e39ba,_0x1215bf,_0x325aeb[_0x456d('0xa')],_0x325aeb[_0x456d('0x2c')]);}else if(_0xfac6b6==0x1){_0xad498f[_0x456d('0x43')]=_0x456d('0x31');_0xad498f[_0x456d('0x25')](_0x2e39ba,_0x1215bf,_0x325aeb['tilewidth'],_0x325aeb[_0x456d('0x2c')]);}else if(_0xfac6b6==0x2){_0xad498f[_0x456d('0x43')]=_0x456d('0x1c');_0xad498f[_0x456d('0x25')](_0x2e39ba,_0x1215bf,_0x325aeb[_0x456d('0xa')],_0x325aeb['tileheight']);var _0x3e50d9=0x0;var _0x452cbe=0x3;var _0x22e9ab=0x40;var _0x2ec747=0x40;_0xad498f[_0x456d('0x36')](_0x180704,_0x3e50d9*_0x22e9ab,_0x452cbe*_0x2ec747,_0x22e9ab,_0x2ec747,_0x2e39ba,_0x1215bf,_0x325aeb[_0x456d('0xa')],_0x325aeb['tileheight']);}}}}function _0x349bb3(){for(var _0x3ea15a=0x0;_0x3ea15a<_0x3fe357[_0x456d('0x22')][_0x456d('0x7')];_0x3ea15a++){var _0x2ccc1a=_0x3fe357[_0x456d('0x22')][_0x3ea15a];var _0x30e523=_0x2ccc1a['x'];var _0x47c853=_0x2ccc1a['y'];var _0x56f678=_0x30e523*_0x325aeb[_0x456d('0xa')];var _0x5a15=_0x47c853*_0x325aeb[_0x456d('0x2c')];var _0xf6c2cc=0x0;var _0x5519e5=0x0;if(_0x3ea15a==0x0){var _0x309f22=_0x3fe357[_0x456d('0x22')][_0x3ea15a+0x1];if(_0x47c853<_0x309f22['y']){_0xf6c2cc=0x3;_0x5519e5=0x0;}else if(_0x30e523>_0x309f22['x']){_0xf6c2cc=0x4;_0x5519e5=0x0;}else if(_0x47c853>_0x309f22['y']){_0xf6c2cc=0x4;_0x5519e5=0x1;}else if(_0x30e523<_0x309f22['x']){_0xf6c2cc=0x3;_0x5519e5=0x1;}}else if(_0x3ea15a==_0x3fe357[_0x456d('0x22')][_0x456d('0x7')]-0x1){var _0x244e64=_0x3fe357[_0x456d('0x22')][_0x3ea15a-0x1];if(_0x244e64['y']<_0x47c853){_0xf6c2cc=0x3;_0x5519e5=0x2;}else if(_0x244e64['x']>_0x30e523){_0xf6c2cc=0x4;_0x5519e5=0x2;}else if(_0x244e64['y']>_0x47c853){_0xf6c2cc=0x4;_0x5519e5=0x3;}else if(_0x244e64['x']<_0x30e523){_0xf6c2cc=0x3;_0x5519e5=0x3;}}else{var _0x244e64=_0x3fe357[_0x456d('0x22')][_0x3ea15a-0x1];var _0x309f22=_0x3fe357['segments'][_0x3ea15a+0x1];if(_0x244e64['x']<_0x30e523&&_0x309f22['x']>_0x30e523||_0x309f22['x']<_0x30e523&&_0x244e64['x']>_0x30e523){_0xf6c2cc=0x1;_0x5519e5=0x0;}else if(_0x244e64['x']<_0x30e523&&_0x309f22['y']>_0x47c853||_0x309f22['x']<_0x30e523&&_0x244e64['y']>_0x47c853){_0xf6c2cc=0x2;_0x5519e5=0x0;}else if(_0x244e64['y']<_0x47c853&&_0x309f22['y']>_0x47c853||_0x309f22['y']<_0x47c853&&_0x244e64['y']>_0x47c853){_0xf6c2cc=0x2;_0x5519e5=0x1;}else if(_0x244e64['y']<_0x47c853&&_0x309f22['x']<_0x30e523||_0x309f22['y']<_0x47c853&&_0x244e64['x']<_0x30e523){_0xf6c2cc=0x2;_0x5519e5=0x2;}else if(_0x244e64['x']>_0x30e523&&_0x309f22['y']<_0x47c853||_0x309f22['x']>_0x30e523&&_0x244e64['y']<_0x47c853){_0xf6c2cc=0x0;_0x5519e5=0x1;}else if(_0x244e64['y']>_0x47c853&&_0x309f22['x']>_0x30e523||_0x309f22['y']>_0x47c853&&_0x244e64['x']>_0x30e523){_0xf6c2cc=0x0;_0x5519e5=0x0;}}_0xad498f[_0x456d('0x36')](_0x180704,_0xf6c2cc*0x40,_0x5519e5*0x40,0x40,0x40,_0x56f678,_0x5a15,_0x325aeb[_0x456d('0xa')],_0x325aeb[_0x456d('0x2c')]);}}function _0x3cd128(_0x259c01,_0xa5717c,_0xcc1f9f,_0x24274d){var _0x5209f9=_0xad498f['measureText'](_0x259c01);_0xad498f['fillText'](_0x259c01,_0xa5717c+(_0x24274d-_0x5209f9[_0x456d('0x23')])/0x2,_0xcc1f9f);}function _0x4a7d66(_0x36528c,_0x4703da){return Math['floor'](_0x36528c+Math[_0x456d('0x35')]()*(_0x4703da-_0x36528c+0x1));}function _0x56f189(_0x3210a9){var _0x8491c4=_0x5968b8(_0x2b63f8,_0x3210a9);if(_0x369770){_0x2ca60f();}else{_0x3fe357[_0x456d('0x41')]=(_0x3fe357[_0x456d('0x41')]+0x1)%_0x3fe357[_0x456d('0x9')][_0x456d('0x7')];}}function _0x15334f(_0x1aca05){if(_0x369770){_0x2ca60f();}else{if(_0x1aca05[_0x456d('0x5')]==0x25||_0x1aca05[_0x456d('0x5')]==0x41){if(_0x3fe357[_0x456d('0x41')]!=0x1){_0x3fe357[_0x456d('0x41')]=0x3;}}else if(_0x1aca05[_0x456d('0x5')]==0x26||_0x1aca05[_0x456d('0x5')]==0x57){if(_0x3fe357[_0x456d('0x41')]!=0x2){_0x3fe357[_0x456d('0x41')]=0x0;}}else if(_0x1aca05['keyCode']==0x27||_0x1aca05[_0x456d('0x5')]==0x44){if(_0x3fe357[_0x456d('0x41')]!=0x3){_0x3fe357[_0x456d('0x41')]=0x1;}}else if(_0x1aca05[_0x456d('0x5')]==0x28||_0x1aca05[_0x456d('0x5')]==0x53){if(_0x3fe357['direction']!=0x0){_0x3fe357[_0x456d('0x41')]=0x2;}}}}document[_0x456d('0x32')](_0x456d('0x2e'))[_0x456d('0x14')]=function _0x3b87b7(){if(_0x369770){_0x2ca60f();}else{if(_0x3fe357[_0x456d('0x41')]!=0x1){_0x3fe357[_0x456d('0x41')]=0x3;}}};document['getElementById']('up')[_0x456d('0x14')]=function _0x52225d(){if(_0x369770){_0x2ca60f();}else{if(_0x3fe357[_0x456d('0x41')]!=0x2){_0x3fe357[_0x456d('0x41')]=0x0;}}};document[_0x456d('0x32')]('right')[_0x456d('0x14')]=function _0x51e80c(){if(_0x369770){_0x2ca60f();}else{if(_0x3fe357[_0x456d('0x41')]!=0x3){_0x3fe357[_0x456d('0x41')]=0x1;}}};document[_0x456d('0x32')]('down')[_0x456d('0x14')]=function _0x286c61(){if(_0x369770){_0x2ca60f();}else{if(_0x3fe357[_0x456d('0x41')]!=0x0){_0x3fe357[_0x456d('0x41')]=0x2;}}};function _0x5968b8(_0x4c66f1,_0x16e880){var _0x420482=_0x4c66f1['getBoundingClientRect']();return{'x':Math[_0x456d('0x33')]((_0x16e880[_0x456d('0x39')]-_0x420482[_0x456d('0x2e')])/(_0x420482['right']-_0x420482[_0x456d('0x2e')])*_0x4c66f1[_0x456d('0x23')]),'y':Math[_0x456d('0x33')]((_0x16e880[_0x456d('0x1b')]-_0x420482[_0x456d('0xd')])/(_0x420482[_0x456d('0x16')]-_0x420482[_0x456d('0xd')])*_0x4c66f1[_0x456d('0x3')])};}_0x25dc1f();};