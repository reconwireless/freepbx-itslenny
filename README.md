freepbx-itslenny
================

Place holder to create module based on dialplan from lgaetz
https://github.com/lgaetz

[app-blacklist-check]
include => app-blacklist-check-custom
exten => s,1(check),GotoIf($["${BLACKLIST()}"="1"]?blacklisted)
exten => s,n,Set(CALLED_BLACKLIST=1)
exten => s,n,Return()
exten => s,n(blacklisted),Answer
; the following line is supposed to initiate record in FreePBX 2.10 + but still needs work
exten => x,n,Gosub(sub-record-check,s,1(force,${CALLERID(num)},always))
exten => s,n,Dial(SIP/lenny@sip.itslenny.com,60,L(240000))
exten => s,n,Hangup
;--== end of [app-blacklist-check] ==--;

exten => s,n,Set(CALLFILENAME=Telemarketer-${CALLERID(num)}-${STRFTIME(${EPOCH},,%Y%m%d-%H%M%S)})
exten => s,n,Monitor(wav,${CALLFILENAME},m)
