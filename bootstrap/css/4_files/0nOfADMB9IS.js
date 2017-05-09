if (self.CavalryLogger) { CavalryLogger.start_js(["9q32M"]); }

__d('MessengerContextBanner.react',['cx','Badge.react','ImageBlock.react','immutable','MercuryParticipantsConstants','MercuryParticipantsImage.react','MercuryThreadImage.react','React','MercuryShareAttachmentRenderLocations','requireWeak'],(function a(b,c,d,e,f,g,h){'use strict';var i,j;if(c.__markCompiled)c.__markCompiled();var k=c('React').PropTypes,l=void 0;c('requireWeak')('MessengerThreadImage.react',function(n){l=n;});i=babelHelpers.inherits(m,c('React').PureComponent);j=i&&i.prototype;function m(){var n,o;for(var p=arguments.length,q=Array(p),r=0;r<p;r++)q[r]=arguments[r];return o=(n=j.constructor).call.apply(n,[this].concat(q)),this.$MessengerContextBanner1=function(){var s=this.props.location===c('MercuryShareAttachmentRenderLocations').MESSENGER,t=null;if(this.props.thread){var u=l&&s?l:c('MercuryThreadImage.react');t=c('React').createElement(u,{showBadge:false,participants:this.props.participants,size:s?60:null,thread:this.props.thread,viewer:this.props.viewer});}else if(this.props.participantIDs)t=c('React').createElement(c('MercuryParticipantsImage.react'),{participants:this.props.participantIDs,size:c('MercuryParticipantsConstants').BIG_IMAGE_SIZE});return (c('React').createElement('div',{className:"_llk"},t));}.bind(this),this.$MessengerContextBanner2=function(){if(this.props.location!==c('MercuryShareAttachmentRenderLocations').MESSENGER)return null;var s=this.props.isVerified?c('React').createElement(c('Badge.react'),{size:'medium',type:'verified'}):null;return (c('React').createElement('div',{className:"_llq"},c('React').createElement('span',{className:"_3oh-"},this.props.contactName,s)));}.bind(this),this.$MessengerContextBanner3=function(){return (c('React').createElement('div',{className:"_1n-e _36zg"},this.props.connectionContext));}.bind(this),this.$MessengerContextBanner4=function(){if(!this.props.contextItems.length)return null;return (c('React').createElement('div',null,this.props.contextItems.map(function(s,t){return (c('React').createElement('div',{className:"_1n-e",key:'item:'+t},s));})));}.bind(this),o;}m.prototype.render=function(){return c('React').createElement(c('ImageBlock.react'),{className:"_llj"+(this.props.location===c('MercuryShareAttachmentRenderLocations').MESSENGER?' '+"_2eu-":'')+(this.props.location===c('MercuryShareAttachmentRenderLocations').CHAT?' '+"_2eu_":'')+(this.props.location===c('MercuryShareAttachmentRenderLocations').WEB_INBOX?' '+"_2ev0":''),spacing:'medium',style:this.props.style},this.$MessengerContextBanner1(),c('React').createElement('div',{className:"_lll"},this.$MessengerContextBanner2(),this.$MessengerContextBanner3(),this.$MessengerContextBanner4()));};m.propTypes={contactName:k.string,connectionContext:k.string,contextItems:k.arrayOf(k.string).isRequired,isVerified:k.bool,location:k.string.isRequired,participantIDs:k.arrayOf(k.string),participants:k.instanceOf(c('immutable').Map),thread:k.object,viewer:k.string.isRequired};f.exports=m;}),null);
__d("XMessengerContextBannerController",["XController"],(function a(b,c,d,e,f,g){c.__markCompiled&&c.__markCompiled();f.exports=c("XController").create("\/ajax\/messenger\/context_banner\/",{profile_id:{type:"Int",required:true},max_context_items:{type:"Int",defaultValue:3}});}),null);
__d('MessengerContextInformationStore',['AsyncRequest','EventEmitter','Map','XMessengerContextBannerController'],(function a(b,c,d,e,f,g){'use strict';var h,i;if(c.__markCompiled)c.__markCompiled();var j=new (c('Map'))(),k=new (c('Map'))();h=babelHelpers.inherits(l,c('EventEmitter'));i=h&&h.prototype;l.prototype.getOrFetch=function(m){var n=j.get(m);n||this.$MessengerContextInformationStore1(m);return n;};l.prototype.$MessengerContextInformationStore1=function(m){if(k.get(m))return;var n=c('XMessengerContextBannerController').getURIBuilder().setInt('profile_id',m).getURI(),o=new (c('AsyncRequest'))().setAllowCrossPageTransition(true).setURI(n).setHandler(this.$MessengerContextInformationStore2.bind(this,m));k.set(m,o);o.send();};l.prototype.$MessengerContextInformationStore2=function(m,n){j.set(m,{connectionContext:n.payload.connection_context||'',contextItems:n.payload.context_items||[]});k['delete'](m);this.emit('change');};function l(){h.apply(this,arguments);}f.exports=new l();}),null);
__d('MessengerContextBannerContainer.react',['DOMDimensions','immutable','MercuryIDs','MercuryParticipants','MercuryThreads','MessengerContextBanner.react','MessengerContextInformationStore','ReactComponentWithPureRenderMixin','React','ReactDOM','StoreAndPropBasedStateMixin'],(function a(b,c,d,e,f,g){'use strict';if(c.__markCompiled)c.__markCompiled();var h=c('React').PropTypes,i=c('React').createClass({displayName:'MessengerContextBannerContainer',mixins:[c('ReactComponentWithPureRenderMixin'),c('StoreAndPropBasedStateMixin')(c('MercuryParticipants'),c('MercuryThreads'),c('MessengerContextInformationStore'))],propTypes:{location:h.string.isRequired,onResize:h.func,otherUserFBIDs:h.arrayOf(h.string),threadID:h.string,viewer:h.string.isRequired},statics:{calculateState:function j(k){var l=null,m=null;if(k.threadID){l=c('MercuryThreads').getForFBID(k.viewer).getOrFetch(k.threadID);m=l&&l.participants;}else if(k.otherUserFBIDs&&k.otherUserFBIDs.length===1)m=k.otherUserFBIDs.map(function(p){return c('MercuryParticipants').getIDFromVanityOrFBID(p);});var n=c('immutable').Map();if(m)n=n.withMutations(function(p){m&&m.forEach(function(q){p.set(q,c('MercuryParticipants').getOrFetch(q));});});var o=null;if(l){o=n.get(c('MercuryIDs').getParticipantIDFromFromThreadID(l.thread_id));}else o=m&&n.get(m[0]);return babelHelpers['extends']({contact:o,participantIDs:m,participants:n,thread:l},i.getContextInformation(o&&o.fbid&&o.fbid.toString()));},getContextInformation:function j(k){var l=void 0;if(k)l=c('MessengerContextInformationStore').getOrFetch(k.toString());return l||{connectionContext:'',contextItems:[]};}},componentDidUpdate:function j(){var k=c('ReactDOM').findDOMNode(this);if(!k)return;var l=c('DOMDimensions').getElementDimensions(k).height;if(this.props.onResize)this.props.onResize(l);},render:function j(){if(!this.state.contact)return null;if(this.state.contact.type==='page'&&!this.state.connectionContext&&!this.state.contextItems.length)return null;return (c('React').createElement(c('MessengerContextBanner.react'),{contactName:this.state.contact.name,connectionContext:this.state.connectionContext,contextItems:this.state.contextItems,isVerified:this.state.contact.is_verified,location:this.props.location,participantIDs:this.state.participantIDs,participants:this.state.participants,style:this.props.style,thread:this.state.thread,viewer:this.props.viewer}));}});f.exports=i;}),null);