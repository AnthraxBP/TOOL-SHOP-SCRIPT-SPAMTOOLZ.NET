;window.CloudflareApps=window.CloudflareApps||{};CloudflareApps.siteId="490d817a486cb0ce585612bf921ec9c0";CloudflareApps.installs=CloudflareApps.installs||{};;(function(){'use strict'
CloudflareApps.internal=CloudflareApps.internal||{}
var errors=[]
CloudflareApps.internal.placementErrors=errors
var errorHashes={}
function noteError(options){var hash=options.selector+'::'+options.type+'::'+(options.installId||'')
if(errorHashes[hash]){return}
errorHashes[hash]=true
errors.push(options)}
var initializedSelectors={}
var currentInit=false
CloudflareApps.internal.markSelectors=function markSelectors(){if(!currentInit){check()
currentInit=true
setTimeout(function(){currentInit=false})}}
function check(){var installs=window.CloudflareApps.installs
for(var installId in installs){if(!installs.hasOwnProperty(installId)){continue}
var selectors=installs[installId].selectors
if(!selectors){continue}
for(var key in selectors){if(!selectors.hasOwnProperty(key)){continue}
var hash=installId+'::'+key
if(initializedSelectors[hash]){continue}
var els=document.querySelectorAll(selectors[key])
if(els&&els.length>1){noteError({type:'init:too-many',option:key,selector:selectors[key],installId:installId})
initializedSelectors[hash]=true
continue}else if(!els||!els.length){continue}
initializedSelectors[hash]=true
els[0].setAttribute('cfapps-selector',selectors[key])}}}
CloudflareApps.querySelector=function querySelector(selector){if(selector==='body'||selector==='head'){return document[selector]}
CloudflareApps.internal.markSelectors()
var els=document.querySelectorAll('[cfapps-selector="'+selector+'"]')
if(!els||!els.length){noteError({type:'select:not-found:by-attribute',selector:selector})
els=document.querySelectorAll(selector)
if(!els||!els.length){noteError({type:'select:not-found:by-query',selector:selector})
return null}else if(els.length>1){noteError({type:'select:too-many:by-query',selector:selector})}
return els[0]}
if(els.length>1){noteError({type:'select:too-many:by-attribute',selector:selector})}
return els[0]}}());(function(){'use strict'
var prevEls={}
CloudflareApps.createElement=function createElement(options,prevEl){options=options||{}
CloudflareApps.internal.markSelectors()
try{if(prevEl&&prevEl.parentNode){var replacedEl
if(prevEl.cfAppsElementId){replacedEl=prevEls[prevEl.cfAppsElementId]}
if(replacedEl){prevEl.parentNode.replaceChild(replacedEl,prevEl)
delete prevEls[prevEl.cfAppsElementId]}else{prevEl.parentNode.removeChild(prevEl)}}
var element=document.createElement('cloudflare-app')
var container
if(options.pages&&options.pages.URLPatterns&&!CloudflareApps.matchPage(options.pages.URLPatterns)){return element}
try{container=CloudflareApps.querySelector(options.selector)}catch(e){}
if(!container){return element}
if(!container.parentNode&&(options.method==='after'||options.method==='before'||options.method==='replace')){return element}
if(container===document.body){if(options.method==='after'){options.method='append'}else if(options.method==='before'){options.method='prepend'}}
switch(options.method){case'prepend':if(container.firstChild){container.insertBefore(element,container.firstChild)
break}
case'append':container.appendChild(element)
break
case'after':if(container.nextSibling){container.parentNode.insertBefore(element,container.nextSibling)}else{container.parentNode.appendChild(element)}
break
case'before':container.parentNode.insertBefore(element,container)
break
case'replace':try{var id=element.cfAppsElementId=Math.random().toString(36)
prevEls[id]=container}catch(e){}
container.parentNode.replaceChild(element,container)}
return element}catch(e){if(typeof console!=='undefined'&&typeof console.error!=='undefined'){console.error('Error creating Cloudflare Apps element',e)}}}}());(function(){'use strict'
CloudflareApps.matchPage=function matchPage(patterns){if(!patterns||!patterns.length){return true}
var loc=document.location.host+document.location.pathname
if(window.CloudflareApps&&CloudflareApps.proxy&&CloudflareApps.proxy.originalURL){var url=CloudflareApps.proxy.originalURL.parsed
loc=url.host+url.path}
for(var i=0;i<patterns.length;i++){var re=new RegExp(patterns[i],'i')
if(re.test(loc)){return true}}
return false}}());CloudflareApps.installs["G63SyyatWqaJ"]={appId:"mt9QUlJFKGSg",scope:{}};;CloudflareApps.installs["G63SyyatWqaJ"].options={"account":{"accountId":"kPb93rgEbTcS","service":"jsguardian"},"free":{"guardInnerHTML":"clean","guardInput":"strict","guardPrompt":"clean","guardTransport":"https-only","guardWhen":"before","guardXSS":"block"}};;CloudflareApps.installs["ePBCIy7WQTrP"]={appId:"ZCDIXCYkgZ6P",scope:{}};;CloudflareApps.installs["ePBCIy7WQTrP"].options={"behavior":{"automaticallyHide":false,"showCloseButton":true},"cta":{"label":"","newWindow":false,"show":false},"message":"Notify all buyers when the problem is solved in the report, confirm the shutdown immediately","messagePlan":"single","messages":[{"cta":{"label":"","newWindow":false,"show":true},"endDate":"Wed Jan 1 2020 18:30 +0200","useEndDate":false}],"theme":{"backgroundColor":"#0099ff","buttonBackgroundColor":"#ffffff","buttonTextColor":"#0099ff","buttonTextColorStrategy":"auto","style":"prominent","textColor":"#ffffff"}};;CloudflareApps.installs["ePBCIy7WQTrP"].product={"id":"basic"};;CloudflareApps.installs["vRgFI0LzIyMW"]={appId:"nt4L5NPJq1za",scope:{}};;CloudflareApps.installs["vRgFI0LzIyMW"].options={"blocks":[{"code":"\u003c!-- Load Facebook SDK for JavaScript --\u003e\n      \u003cdiv id=\"fb-root\"\u003e\u003c/div\u003e\n      \u003cscript\u003e\n        window.fbAsyncInit = function() {\n          FB.init({\n            xfbml            : true,\n            version          : 'v7.0'\n          });\n        };\n\n        (function(d, s, id) {\n        var js, fjs = d.getElementsByTagName(s)[0];\n        if (d.getElementById(id)) return;\n        js = d.createElement(s); js.id = id;\n        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';\n        fjs.parentNode.insertBefore(js, fjs);\n      }(document, 'script', 'facebook-jssdk'));\u003c/script\u003e\n\n      \u003c!-- Your Chat Plugin code --\u003e\n      \u003cdiv class=\"fb-customerchat\"\n        attribution=setup_tool\n        page_id=\"104821287891956\"\n  logged_in_greeting=\"? Hi! How can we help you\"\n  logged_out_greeting=\"? Hi! How can we help you\"\u003e\n      \u003c/div\u003e","location":{"method":"before","selector":"body \u003e .background \u003e .container"}},{"code":"\u003cstyle\u003e\n.snow{position:fixed;top:0;left:0;right:0;pointer-events:none;z-index:20}.contentz{height:100%;position:relative;overflow:hidden;z-index:1}\n\u003c/style\u003e\n\u003cdiv class='contentz'\u003e\n\u003ccanvas class='snow' id='snow'\u003e\u003c/canvas\u003e\n\u003c/div\u003e\n\u003cscript type='text/javascript'\u003e\n//\u003c![CDATA[\n!function(){function t(t){var n=t.getContext(\"2d\"),e=0,i=0,o=[],d=function(){this.x=this.y=this.dx=this.dy=0,this.reset()};function a(){e=window.innerWidth,i=window.innerHeight,t.width=e,t.height=i,function(t){if(t!=o.length){o=[];for(var n=0;n\u003ct;n++)o.push(new d)}}(e*i/1e4)}d.prototype.reset=function(){this.y=Math.random()*i,this.x=Math.random()*e,this.dx=1*Math.random()-.5,this.dy=.5*Math.random()+.5},a(),function t(){n.clearRect(0,0,e,i),n.fillStyle=\"rgba(255,255,255,.3)\",o.forEach(function(t){t.y+=t.dy,t.x+=t.dx,t.y\u003ei\u0026\u0026(t.y=0),t.x\u003ee\u0026\u0026(t.reset(),t.y=0),n.beginPath(),n.arc(t.x,t.y,5,0,2*Math.PI,!1),n.fill()}),window.requestAnimationFrame(t)}(),window.addEventListener(\"resize\",a)}var n;n=function(){t(document.getElementById(\"snow\"))},\"loading\"!=document.readyState?n():document.addEventListener(\"DOMContentLoaded\",n)}();\n//]]\u003e\n\u003c/script\u003e","location":{"method":"after","selector":"body \u003e .background \u003e .container \u003e .login"}},{"code":"\u003c!-- Default Statcounter code for 4price.net\nhttps://www.4price.net --\u003e\n\u003cscript type=\"text/javascript\"\u003e\nvar sc_project=12361508; \nvar sc_invisible=1; \nvar sc_security=\"344b0295\"; \nvar sc_https=1; \n\u003c/script\u003e\n\u003cscript type=\"text/javascript\"\nsrc=\"https://www.statcounter.com/counter/counter.js\"\nasync\u003e\u003c/script\u003e\n\u003cnoscript\u003e\u003cdiv class=\"statcounter\"\u003e\u003ca title=\"Web Analytics\"\nhref=\"https://statcounter.com/\" target=\"_blank\"\u003e\u003cimg\nclass=\"statcounter\"\nsrc=\"https://c.statcounter.com/12361508/0/344b0295/1/\"\nalt=\"Web Analytics\"\u003e\u003c/a\u003e\u003c/div\u003e\u003c/noscript\u003e\n\u003c!-- End of Statcounter Code --\u003e","location":{"method":"append","selector":"body \u003e .background \u003e .container"}}]};;CloudflareApps.installs["vRgFI0LzIyMW"].selectors={"blocks[0].location.selector":"body \u003e .background \u003e .container","blocks[1].location.selector":"body \u003e .background \u003e .container \u003e .login","blocks[2].location.selector":"body \u003e .background \u003e .container"};;CloudflareApps.installs["x4BpV8FaiWbb"]={appId:"6GDwzm7BYxuh",scope:{}};;CloudflareApps.installs["x4BpV8FaiWbb"].options={"account":{"accountId":"8kewmGDrGASj","service":"mailchannels-inbound"},"createAccount":true};;CloudflareApps.installs["x4BpV8FaiWbb"].product={"id":"free"};;CloudflareApps.installs["x4oDvPtEINId"]={appId:"0n-Tbk3FbOG8",scope:{}};;CloudflareApps.installs["x4oDvPtEINId"].options={};;if(CloudflareApps.matchPage(CloudflareApps.installs['vRgFI0LzIyMW'].URLPatterns)){(function(){'use strict'
if(!document.addEventListener)return
var options=CloudflareApps.installs['vRgFI0LzIyMW'].options
var elements={}
var prevElements={}
var initialized=false;function updateElements(){options.blocks.forEach(function(block,index){var locationHash=[block.location.selector,block.location.method,index].join('!')
var element
if(elements[locationHash]){element=elements[locationHash]}else{if(block.location.method==='replace'){prevElements[locationHash]=document.querySelector(block.location.selector)}
element=CloudflareApps.createElement(block.location)
elements[locationHash]=element}
element.foundInBlocks=true
element.innerHTML=block.code
var scripts=Array.prototype.slice.call(element.querySelectorAll('script'))
if(scripts){scripts.forEach(function(script){var newScript=document.createElement('script')
for(var key=script.attributes.length;key--;){var attr=script.attributes[key]
if(attr.specified){newScript.setAttribute(attr.name,attr.value)}}
newScript.innerHTML=script.innerHTML
element.replaceChild(newScript,script)})}})
for(var hash in elements){if(!elements[hash].foundInBlocks){if(prevElements[hash]){elements[hash].parentNode.replaceChild(prevElements[hash],elements[hash])
delete prevElements[hash]}else{elements[hash].parentNode.removeChild(elements[hash])}
delete elements[hash]}else{delete elements[hash].foundInBlocks}}}
if(document.readyState==='loading'){document.addEventListener('DOMContentLoaded',function(){if(initialized==false){initialized=true;updateElements();}})}else{updateElements()}
window.CloudflareApps.installs['vRgFI0LzIyMW'].scope={setOptions:function(nextOptions){options=nextOptions
updateElements()}}}())};if(CloudflareApps.matchPage(CloudflareApps.installs['x4BpV8FaiWbb'].URLPatterns)){if("x4BpV8FaiWbb"==='preview'){location.replace("https://www.mailchannels.com/welcome");}};if(CloudflareApps.matchPage(CloudflareApps.installs['G63SyyatWqaJ'].URLPatterns)){(function(){"use strict";function cloneObject(obj,done=new Map()){if(done.has(obj)){return done.get(obj);}
var clone=Array.isArray(obj)?[]:{};done.set(obj,clone);for(var key in obj){if(typeof(obj[key])=="object"&&obj[key]!=null){clone[key]=cloneObject(obj[key],done);}else{clone[key]=obj[key];}}
return clone;}
Object.seal(DOMParser.prototype);var parser=new DOMParser();function sanitize(value){if(typeof(value)==="string"){var body=parser.parseFromString(value,"text/html").body,riskyattributes=["background","form","autofocus","dirname","onfocus","formaction","onformchange","onforminput","onerror"],riskytags=["link","details","base","object"],riskytext=["${","`","<!--","[CDATA"];for(var text of riskytext){if(body.innerHTML.includes(text)){return"";}}
for(var aname of riskyattributes){if(body.querySelectorAll(`[${aname}]`).length>0){return"";}}
for(var tname of riskytags){if(body.querySelectorAll(tname).length>0){return"";}}
if(body.querySelectorAll("[src='#']").length>0){return"";}
return body.innerHTML;}
return"";}
var _addEventListener=window.addEventListener,_setAttribute=Element.prototype.setAttribute,options=cloneObject(typeof(CloudflareApps.installs['G63SyyatWqaJ'].options)!=="undefined"?CloudflareApps.installs['G63SyyatWqaJ'].options:{"free":{"guardWhen":"before","guardInnerHTML":"clean","guardPrompt":"clean","guardInput":"clean","guardTransport":"https-only","guardXSS":"sanitize"},"plan":"free"});function isExecutable(str){var functionExp=/([\s\(]*.\(\s*.*\s*\)\s*.*\s*=>)|([\s*.*\s*=>\s*.\{)|([\s\(]*.[Ff]unction\s*.*\s*\(\s*.*\s*\)\s*.*\s*\{)/,templateExp=/(\`(\s*.*)\$\{(\s*.*\s*.*)\}(\s*.*)\`)/;return functionExp.test(str)||templateExp.test(str)};function protect(){if(options.guardInput&&options.guardInput!=="off"){(function(){if(_addEventListener){_addEventListener.call(window,"change",function(event){var target=event.currentTarget;if(target instanceof HTMLInputElement||target instanceof HTMLTextAreaElement){var oldvalue=target.getAttribute("value"),clean=sanitize(target.value);if(oldvalue===clean){return;}
var executable=isExecutable(clean);if((options.guardInput==="clean"||target.value==clean+"")&&!executable){target.value=clean;_setAttribute.call(target,"value",clean);}else if(options.guardInput==="strict"||executable){target.value=oldvalue;}}});}
var desc=Object.getOwnPropertyDescriptor(HTMLInputElement.prototype,"value");Object.defineProperty(HTMLInputElement.prototype,"value",{enumerable:desc.enumerable,configurable:desc.configurable,get:desc.get,set:function(value){var clean=sanitize(value)+"",executable=isExecutable(clean);if((options.guardInput==="clean"||value==clean+"")&&!executable){desc.set.call(this,clean);return clean;}}});})();}
if(options.guardInnerHTML&&options.guardInnerHTML!=="off"){(function(){var desc=Object.getOwnPropertyDescriptor(Element.prototype,"innerHTML");Object.defineProperty(Element.prototype,"innerHTML",{enumerable:desc.enumerable,configurable:false,get:desc.get,set:function(value){if(options.guardInnerHTML==="prevent"){return this.innerHTML;}
var clean=sanitize(value)+"";if(options.guardInnerHTML==="clean"||value==clean+""){desc.set.call(this,clean);return clean;}}});})();}
if(options.guardPrompt&&options.guardPrompt!=="off"){(function(){if(options.guardPrompt==="prevent"){Object.defineProperty(window,"prompt",{value:function(){return"";}})}else if(options.guardPrompt==="clean"||options.guardPrompt==="strict"){var _prompt=window.prompt.bind(window);Object.defineProperty(window,"prompt",{value:function(title){var input=_prompt(title),sanitized=sanitize(input)+"";if(options.guardPrompt==="strict"){if(input!=sanitized||isExecutable(sanitized)){window.alert("Invalid input: "+input);return"";}}else if(isExecutable(sanitized)){window.alert("Invalid input: "+input);return"";}
return sanitized;}});}})();}
if(options.guardTransport==="https-only"){(function(){var meta=document.createElement("meta");meta.setAttribute("http-equiv","Content-Security-Policy");meta.setAttribute("content","upgrade-insecure-requests");document.head.appendChild(meta);meta=document.createElement("meta");meta.setAttribute("http-equiv","Strict-Transport-Security");meta.setAttribute("content","max-age=31536000");document.head.appendChild(meta);})();}
if(options.guardXSS==="sanitize"||options.guardXSS==="block"){(function(){var meta=document.createElement("meta");meta.setAttribute("http-equiv","X-XSS-Protection");if(options.guardXSS==="sanitize"){meta.setAttribute("content","1");}else{meta.setAttribute("content","1; mode=block");}
document.head.appendChild(meta);})();}}
if(options.guardWhen==="after"&&_addEventListener){_addEventListener.call(window,"load",protect);}else{protect();}})();}(function(){var script = document.createElement('script');script.src = '/cdn-cgi/apps/body/cYsRR7vHf911gKekDcQvPiHaQUA.js';document.head.appendChild(script);})();