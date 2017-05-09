if (self.CavalryLogger) { CavalryLogger.start_js(["ESPMu"]); }

__d('VideoCallTypedLogger',['Banzai','GeneratedLoggerUtils','nullthrows'],(function a(b,c,d,e,f,g){'use strict';if(c.__markCompiled)c.__markCompiled();function h(){this.clear();}h.prototype.log=function(){c('GeneratedLoggerUtils').log('logger:VideoCallLoggerConfig',this.$VideoCallTypedLogger1,c('Banzai').BASIC);};h.prototype.logVital=function(){c('GeneratedLoggerUtils').log('logger:VideoCallLoggerConfig',this.$VideoCallTypedLogger1,c('Banzai').VITAL);};h.prototype.clear=function(){this.$VideoCallTypedLogger1={};return this;};h.prototype.updateData=function(j){this.$VideoCallTypedLogger1=babelHelpers['extends']({},this.$VideoCallTypedLogger1,j);return this;};h.prototype.setEvent=function(j){this.$VideoCallTypedLogger1.event=j;return this;};h.prototype.setMessage=function(j){this.$VideoCallTypedLogger1.message=j;return this;};var i={event:true,message:true};f.exports=h;}),null);
__d('ChatVideoCallButton.react',['cx','fbt','invariant','Bootloader','FBID','FBRTCCallabilityStore','FBRTCCore','Keys','LayerFadeOnHide','Link.react','MercuryIDs','MercuryParticipants','MercuryThreadIDMap','ReactComponentWithPureRenderMixin','React','StoreAndPropBasedStateMixin','TrackingNodes','VideoCallTypedLogger','XUIAmbientNUX.react'],(function a(b,c,d,e,f,g,h,i,j){'use strict';if(c.__markCompiled)c.__markCompiled();var k=c('MercuryThreadIDMap').get(),l=c('React').PropTypes,m={isCallable:false,shown:false,user:null},n=c('React').createClass({displayName:'ChatVideoCallButton',mixins:[c('ReactComponentWithPureRenderMixin'),c('StoreAndPropBasedStateMixin')(c('FBRTCCallabilityStore'),c('MercuryParticipants'))],propTypes:{isAudio:l.bool,isGroupChat:l.bool,onRTCNuxCloseButtonClick:l.func.isRequired,rtcNuxShown:l.bool.isRequired,threadID:l.string,viewer:l.string.isRequired,shown:l.bool},getDefaultProps:function o(){return {shown:true};},statics:{calculateState:function o(p){if(!p.threadID)return babelHelpers['extends']({},m);if(p.isGroupChat)return {isCallable:true,shown:p.shown,user:null};var q=c('MercuryIDs').getUserIDFromThreadID(p.threadID);if(q===p.viewer||!c('FBID').isUser(q))return babelHelpers['extends']({},m);!(q&&c('FBID').isUser(q))?j(0):void 0;var r=c('MercuryIDs').getParticipantIDFromUserID(q),s=c('MercuryParticipants').getOrFetch(r);return {isCallable:c('FBRTCCallabilityStore').isCallable(q),shown:p.shown,user:s};}},getTooltipLabel:function o(){var p=this.state.user;if(!p)return undefined;return this.props.isAudio?c('FBRTCCallabilityStore').voiceCallButtonTooltip(p.fbid,p.short_name):c('FBRTCCallabilityStore').callButtonTooltip(p.fbid,p.short_name);},render:function o(){if(!this.state.shown)return null;var p=c('TrackingNodes').getTrackingInfo(this.props.isAudio?c('TrackingNodes').types.VIDEOCHAT:c('TrackingNodes').types.VOICECHAT),q=JSON.stringify({videochat:'call_clicked_bhat_tab'});return (c('React').createElement('div',null,c('React').createElement(c('Link.react'),{'aria-label':this.getTooltipLabel(),className:"button"+(' '+"_3olv")+(this.props.isAudio?' '+"_2fpc":'')+(!this.props.isAudio?' '+"_2fpd":'')+(this.state.isCallable?' '+"enabled":''),'data-ft':p,'data-gt':q,'data-hover':'tooltip','data-tooltip-content':this.getTooltipLabel(),'data-tooltip-position':'above',onClick:this._handleClick,onKeyUp:this._handleKeyUp,ref:'button'}),c('React').createElement(c('XUIAmbientNUX.react'),{alignment:'right',behaviors:{LayerFadeOnHide:c('LayerFadeOnHide')},contextRef:function(){return this.refs.button;}.bind(this),onCloseButtonClick:this.props.onRTCNuxCloseButtonClick,shown:this.props.rtcNuxShown,width:'auto'},i._("Vous pouvez d\u00e9sormais passer un appel de groupe."))));},_handleClick:function o(p){p.preventDefault();if(!this.state.isCallable)return;this.props.onRTCNuxCloseButtonClick();this._initiateCall();},_handleKeyUp:function o(p){p.preventDefault();if(p.keyCode!==c('Keys').RETURN||!this.state.isCallable)return;if(p.target){!(p.target instanceof HTMLElement)?j(0):void 0;p.target.blur();}this._initiateCall();},_initiateCall:function o(){var p=this.props,q=p.isAudio,r=p.isGroupChat,s=p.threadID;!!!s?j(0):void 0;var t=q?'chat_tab_voice_icon':'chat_tab_icon';if(r){if(c('MercuryIDs').isLocalThread(s)){k.getServerIDFromClientID(s,function(u){return this._initiateGroupCall(u,t);}.bind(this));}else this._initiateGroupCall(c('MercuryIDs').getThreadFBIDFromThreadID(s),t);}else{c('FBRTCCore').startOutgoingCall(this.state.user.fbid,t,q);new (c('VideoCallTypedLogger'))().setEvent('chat_tab_call_click').log();}},_initiateGroupCall:function o(p,q){c('Bootloader').loadModules(["MessengerRTCGroupCallParticipantsPickerDialogController","RTCGroupCallUtils"],function(r,s){s.getThread(p,function(t,u){r.render({participants:u['delete'](c('MercuryIDs').getParticipantIDFromUserID(this.props.viewer)),thread:t,viewerID:this.props.viewer,clickSource:'multiway_'+q,conferenceName:'GROUP:'+p,hasVideo:!this.props.isAudio});}.bind(this));}.bind(this),'ChatVideoCallButton.react');}});f.exports=n;}),null);