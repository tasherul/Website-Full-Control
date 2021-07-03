(function(window,undefined){var Globalize,regexHex,regexInfinity,regexParseFloat,regexTrim,arrayIndexOf,endsWith,extend,isArray,isFunction,isObject,startsWith,trim,truncate,zeroPad,appendPreOrPostMatch,expandFormat,formatDate,formatNumber,getTokenRegExp,getEra,getEraYear,parseExact,parseNegativePattern;Globalize=function(cultureSelector){return new Globalize.prototype.init(cultureSelector);};if(typeof require!=="undefined"&&typeof exports!=="undefined"&&typeof module!=="undefined"){module.exports=Globalize;}else{window.Globalize=Globalize;}
Globalize.cultures={};Globalize.prototype={constructor:Globalize,init:function(cultureSelector){this.cultures=Globalize.cultures;this.cultureSelector=cultureSelector;return this;}};Globalize.prototype.init.prototype=Globalize.prototype;Globalize.cultures["default"]={name:"en",englishName:"English",nativeName:"English",isRTL:false,language:"en",numberFormat:{pattern:["-n"],decimals:2,",":",",".":".",groupSizes:[3],"+":"+","-":"-","NaN":"NaN",negativeInfinity:"-Infinity",positiveInfinity:"Infinity",percent:{pattern:["-n %","n %"],decimals:2,groupSizes:[3],",":",",".":".",symbol:"%"},currency:{pattern:["($n)","$n"],decimals:2,groupSizes:[3],",":",",".":".",symbol:"$"}},calendars:{standard:{name:"Gregorian_USEnglish","/":"/",":":":",firstDay:0,days:{names:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],namesAbbr:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],namesShort:["Su","Mo","Tu","We","Th","Fr","Sa"]},months:{names:["January","February","March","April","May","June","July","August","September","October","November","December",""],namesAbbr:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec",""]},AM:["AM","am","AM"],PM:["PM","pm","PM"],eras:[{"name":"A.D.","start":null,"offset":0}],twoDigitYearMax:2029,patterns:{d:"M/d/yyyy",D:"dddd, MMMM dd, yyyy",t:"h:mm tt",T:"h:mm:ss tt",f:"dddd, MMMM dd, yyyy h:mm tt",F:"dddd, MMMM dd, yyyy h:mm:ss tt",M:"MMMM dd",Y:"yyyy MMMM",S:"yyyy\u0027-\u0027MM\u0027-\u0027dd\u0027T\u0027HH\u0027:\u0027mm\u0027:\u0027ss"}}},messages:{}};Globalize.cultures["default"].calendar=Globalize.cultures["default"].calendars.standard;Globalize.cultures.en=Globalize.cultures["default"];Globalize.cultureSelector="en";regexHex=/^0x[a-f0-9]+$/i;regexInfinity=/^[+\-]?infinity$/i;regexParseFloat=/^[+\-]?\d*\.?\d*(e[+\-]?\d+)?$/;regexTrim=/^\s+|\s+$/g;arrayIndexOf=function(array,item){if(array.indexOf){return array.indexOf(item);}
for(var i=0,length=array.length;i<length;i++){if(array[i]===item){return i;}}
return-1;};endsWith=function(value,pattern){return value.substr(value.length- pattern.length)===pattern;};extend=function(){var options,name,src,copy,copyIsArray,clone,target=arguments[0]||{},i=1,length=arguments.length,deep=false;if(typeof target==="boolean"){deep=target;target=arguments[1]||{};i=2;}
if(typeof target!=="object"&&!isFunction(target)){target={};}
for(;i<length;i++){if((options=arguments[i])!=null){for(name in options){src=target[name];copy=options[name];if(target===copy){continue;}
if(deep&&copy&&(isObject(copy)||(copyIsArray=isArray(copy)))){if(copyIsArray){copyIsArray=false;clone=src&&isArray(src)?src:[];}else{clone=src&&isObject(src)?src:{};}
target[name]=extend(deep,clone,copy);}else if(copy!==undefined){target[name]=copy;}}}}
return target;};isArray=Array.isArray||function(obj){return Object.prototype.toString.call(obj)==="[object Array]";};isFunction=function(obj){return Object.prototype.toString.call(obj)==="[object Function]";};isObject=function(obj){return Object.prototype.toString.call(obj)==="[object Object]";};startsWith=function(value,pattern){return value.indexOf(pattern)===0;};trim=function(value){return(value+"").replace(regexTrim,"");};truncate=function(value){if(isNaN(value)){return NaN;}
return Math[value<0?"ceil":"floor"](value);};zeroPad=function(str,count,left){var l;for(l=str.length;l<count;l+=1){str=(left?("0"+ str):(str+"0"));}
return str;};appendPreOrPostMatch=function(preMatch,strings){var quoteCount=0,escaped=false;for(var i=0,il=preMatch.length;i<il;i++){var c=preMatch.charAt(i);switch(c){case"\'":if(escaped){strings.push("\'");}
else{quoteCount++;}
escaped=false;break;case"\\":if(escaped){strings.push("\\");}
escaped=!escaped;break;default:strings.push(c);escaped=false;break;}}
return quoteCount;};expandFormat=function(cal,format){format=format||"F";var pattern,patterns=cal.patterns,len=format.length;if(len===1){pattern=patterns[format];if(!pattern){throw"Invalid date format string \'"+ format+"\'.";}
format=pattern;}
else if(len===2&&format.charAt(0)==="%"){format=format.charAt(1);}
return format;};formatDate=function(value,format,culture){var cal=culture.calendar,convert=cal.convert,ret;if(!format||!format.length||format==="i"){if(culture&&culture.name.length){if(convert){ret=formatDate(value,cal.patterns.F,culture);}
else{var eraDate=new Date(value.getTime()),era=getEra(value,cal.eras);eraDate.setFullYear(getEraYear(value,cal,era));ret=eraDate.toLocaleString();}}
else{ret=value.toString();}
return ret;}
var eras=cal.eras,sortable=format==="s";format=expandFormat(cal,format);ret=[];var hour,zeros=["0","00","000"],foundDay,checkedDay,dayPartRegExp=/([^d]|^)(d|dd)([^d]|$)/g,quoteCount=0,tokenRegExp=getTokenRegExp(),converted;function padZeros(num,c){var r,s=num+"";if(c>1&&s.length<c){r=(zeros[c- 2]+ s);return r.substr(r.length- c,c);}
else{r=s;}
return r;}
function hasDay(){if(foundDay||checkedDay){return foundDay;}
foundDay=dayPartRegExp.test(format);checkedDay=true;return foundDay;}
function getPart(date,part){if(converted){return converted[part];}
switch(part){case 0:return date.getFullYear();case 1:return date.getMonth();case 2:return date.getDate();default:throw"Invalid part value "+ part;}}
if(!sortable&&convert){converted=convert.fromGregorian(value);}
for(;;){var index=tokenRegExp.lastIndex,ar=tokenRegExp.exec(format);var preMatch=format.slice(index,ar?ar.index:format.length);quoteCount+=appendPreOrPostMatch(preMatch,ret);if(!ar){break;}
if(quoteCount%2){ret.push(ar[0]);continue;}
var current=ar[0],clength=current.length;switch(current){case"ddd":case"dddd":var names=(clength===3)?cal.days.namesAbbr:cal.days.names;ret.push(names[value.getDay()]);break;case"d":case"dd":foundDay=true;ret.push(padZeros(getPart(value,2),clength));break;case"MMM":case"MMMM":var part=getPart(value,1);ret.push((cal.monthsGenitive&&hasDay())?(cal.monthsGenitive[clength===3?"namesAbbr":"names"][part]):(cal.months[clength===3?"namesAbbr":"names"][part]));break;case"M":case"MM":ret.push(padZeros(getPart(value,1)+ 1,clength));break;case"y":case"yy":case"yyyy":part=converted?converted[0]:getEraYear(value,cal,getEra(value,eras),sortable);if(clength<4){part=part%100;}
ret.push(padZeros(part,clength));break;case"h":case"hh":hour=value.getHours()%12;if(hour===0)hour=12;ret.push(padZeros(hour,clength));break;case"H":case"HH":ret.push(padZeros(value.getHours(),clength));break;case"m":case"mm":ret.push(padZeros(value.getMinutes(),clength));break;case"s":case"ss":ret.push(padZeros(value.getSeconds(),clength));break;case"t":case"tt":part=value.getHours()<12?(cal.AM?cal.AM[0]:" "):(cal.PM?cal.PM[0]:" ");ret.push(clength===1?part.charAt(0):part);break;case"f":case"ff":case"fff":ret.push(padZeros(value.getMilliseconds(),3).substr(0,clength));break;case"z":case"zz":hour=value.getTimezoneOffset()/ 60;
ret.push((hour<=0?"+":"-")+ padZeros(Math.floor(Math.abs(hour)),clength));break;case"zzz":hour=value.getTimezoneOffset()/ 60;
ret.push((hour<=0?"+":"-")+ padZeros(Math.floor(Math.abs(hour)),2)+":"+ padZeros(Math.abs(value.getTimezoneOffset()%60),2));break;case"g":case"gg":if(cal.eras){ret.push(cal.eras[getEra(value,eras)].name);}
break;case"/":ret.push(cal["/"]);break;default:throw"Invalid date format pattern \'"+ current+"\'.";}}
return ret.join("");};(function(){var expandNumber;expandNumber=function(number,precision,formatInfo){var groupSizes=formatInfo.groupSizes,curSize=groupSizes[0],curGroupIndex=1,factor=Math.pow(10,precision),rounded=Math.round(number*factor)/ factor;
if(!isFinite(rounded)){rounded=number;}
number=rounded;var numberString=number+"",right="",split=numberString.split(/e/i),exponent=split.length>1?parseInt(split[1],10):0;numberString=split[0];split=numberString.split(".");numberString=split[0];right=split.length>1?split[1]:"";if(exponent>0){right=zeroPad(right,exponent,false);numberString+=right.slice(0,exponent);right=right.substr(exponent);}
else if(exponent<0){exponent=-exponent;numberString=zeroPad(numberString,exponent+ 1,true);right=numberString.slice(-exponent,numberString.length)+ right;numberString=numberString.slice(0,-exponent);}
if(precision>0){right=formatInfo["."]+
((right.length>precision)?right.slice(0,precision):zeroPad(right,precision));}
else{right="";}
var stringIndex=numberString.length- 1,sep=formatInfo[","],ret="";while(stringIndex>=0){if(curSize===0||curSize>stringIndex){return numberString.slice(0,stringIndex+ 1)+(ret.length?(sep+ ret+ right):right);}
ret=numberString.slice(stringIndex- curSize+ 1,stringIndex+ 1)+(ret.length?(sep+ ret):"");stringIndex-=curSize;if(curGroupIndex<groupSizes.length){curSize=groupSizes[curGroupIndex];curGroupIndex++;}}
return numberString.slice(0,stringIndex+ 1)+ sep+ ret+ right;};formatNumber=function(value,format,culture){if(!isFinite(value)){if(value===Infinity){return culture.numberFormat.positiveInfinity;}
if(value===-Infinity){return culture.numberFormat.negativeInfinity;}
return culture.numberFormat.NaN;}
if(!format||format==="i"){return culture.name.length?value.toLocaleString():value.toString();}
format=format||"D";var nf=culture.numberFormat,number=Math.abs(value),precision=-1,pattern;if(format.length>1)precision=parseInt(format.slice(1),10);var current=format.charAt(0).toUpperCase(),formatInfo;switch(current){case"D":pattern="n";number=truncate(number);if(precision!==-1){number=zeroPad(""+ number,precision,true);}
if(value<0)number="-"+ number;break;case"N":formatInfo=nf;case"C":formatInfo=formatInfo||nf.currency;case"P":formatInfo=formatInfo||nf.percent;pattern=value<0?formatInfo.pattern[0]:(formatInfo.pattern[1]||"n");if(precision===-1)precision=formatInfo.decimals;number=expandNumber(number*(current==="P"?100:1),precision,formatInfo);break;default:throw"Bad number format specifier: "+ current;}
var patternParts=/n|\$|-|%/g,ret="";for(;;){var index=patternParts.lastIndex,ar=patternParts.exec(pattern);ret+=pattern.slice(index,ar?ar.index:pattern.length);if(!ar){break;}
switch(ar[0]){case"n":ret+=number;break;case"$":ret+=nf.currency.symbol;break;case"-":if(/[1-9]/.test(number)){ret+=nf["-"];}
break;case"%":ret+=nf.percent.symbol;break;}}
return ret;};}());getTokenRegExp=function(){return(/\/|dddd|ddd|dd|d|MMMM|MMM|MM|M|yyyy|yy|y|hh|h|HH|H|mm|m|ss|s|tt|t|fff|ff|f|zzz|zz|z|gg|g/g);};getEra=function(date,eras){if(!eras)return 0;var start,ticks=date.getTime();for(var i=0,l=eras.length;i<l;i++){start=eras[i].start;if(start===null||ticks>=start){return i;}}
return 0;};getEraYear=function(date,cal,era,sortable){var year=date.getFullYear();if(!sortable&&cal.eras){year-=cal.eras[era].offset;}
return year;};(function(){var expandYear,getDayIndex,getMonthIndex,getParseRegExp,outOfRange,toUpper,toUpperArray;expandYear=function(cal,year){if(year<100){var now=new Date(),era=getEra(now),curr=getEraYear(now,cal,era),twoDigitYearMax=cal.twoDigitYearMax;twoDigitYearMax=typeof twoDigitYearMax==="string"?new Date().getFullYear()%100+ parseInt(twoDigitYearMax,10):twoDigitYearMax;year+=curr-(curr%100);if(year>twoDigitYearMax){year-=100;}}
return year;};getDayIndex=function(cal,value,abbr){var ret,days=cal.days,upperDays=cal._upperDays;if(!upperDays){cal._upperDays=upperDays=[toUpperArray(days.names),toUpperArray(days.namesAbbr),toUpperArray(days.namesShort)];}
value=toUpper(value);if(abbr){ret=arrayIndexOf(upperDays[1],value);if(ret===-1){ret=arrayIndexOf(upperDays[2],value);}}
else{ret=arrayIndexOf(upperDays[0],value);}
return ret;};getMonthIndex=function(cal,value,abbr){var months=cal.months,monthsGen=cal.monthsGenitive||cal.months,upperMonths=cal._upperMonths,upperMonthsGen=cal._upperMonthsGen;if(!upperMonths){cal._upperMonths=upperMonths=[toUpperArray(months.names),toUpperArray(months.namesAbbr)];cal._upperMonthsGen=upperMonthsGen=[toUpperArray(monthsGen.names),toUpperArray(monthsGen.namesAbbr)];}
value=toUpper(value);var i=arrayIndexOf(abbr?upperMonths[1]:upperMonths[0],value);if(i<0){i=arrayIndexOf(abbr?upperMonthsGen[1]:upperMonthsGen[0],value);}
return i;};getParseRegExp=function(cal,format){var re=cal._parseRegExp;if(!re){cal._parseRegExp=re={};}
else{var reFormat=re[format];if(reFormat){return reFormat;}}
var expFormat=expandFormat(cal,format).replace(/([\^\$\.\*\+\?\|\[\]\(\)\{\}])/g,"\\\\$1"),regexp=["^"],groups=[],index=0,quoteCount=0,tokenRegExp=getTokenRegExp(),match;while((match=tokenRegExp.exec(expFormat))!==null){var preMatch=expFormat.slice(index,match.index);index=tokenRegExp.lastIndex;quoteCount+=appendPreOrPostMatch(preMatch,regexp);if(quoteCount%2){regexp.push(match[0]);continue;}
var m=match[0],len=m.length,add;switch(m){case"dddd":case"ddd":case"MMMM":case"MMM":case"gg":case"g":add="(\\D+)";break;case"tt":case"t":add="(\\D*)";break;case"yyyy":case"fff":case"ff":case"f":add="(\\d{"+ len+"})";break;case"dd":case"d":case"MM":case"M":case"yy":case"y":case"HH":case"H":case"hh":case"h":case"mm":case"m":case"ss":case"s":add="(\\d\\d?)";break;case"zzz":add="([+-]?\\d\\d?:\\d{2})";break;case"zz":case"z":add="([+-]?\\d\\d?)";break;case"/":add="(\\/)";break;default:throw"Invalid date format pattern \'"+ m+"\'.";}
if(add){regexp.push(add);}
groups.push(match[0]);}
appendPreOrPostMatch(expFormat.slice(index),regexp);regexp.push("$");var regexpStr=regexp.join("").replace(/\s+/g,"\\s+"),parseRegExp={"regExp":regexpStr,"groups":groups};return re[format]=parseRegExp;};outOfRange=function(value,low,high){return value<low||value>high;};toUpper=function(value){return value.split("\u00A0").join(" ").toUpperCase();};toUpperArray=function(arr){var results=[];for(var i=0,l=arr.length;i<l;i++){results[i]=toUpper(arr[i]);}
return results;};parseExact=function(value,format,culture){value=trim(value);var cal=culture.calendar,parseInfo=getParseRegExp(cal,format),match=new RegExp(parseInfo.regExp).exec(value);if(match===null){return null;}
var groups=parseInfo.groups,era=null,year=null,month=null,date=null,weekDay=null,hour=0,hourOffset,min=0,sec=0,msec=0,tzMinOffset=null,pmHour=false;for(var j=0,jl=groups.length;j<jl;j++){var matchGroup=match[j+ 1];if(matchGroup){var current=groups[j],clength=current.length,matchInt=parseInt(matchGroup,10);switch(current){case"dd":case"d":date=matchInt;if(outOfRange(date,1,31))return null;break;case"MMM":case"MMMM":month=getMonthIndex(cal,matchGroup,clength===3);if(outOfRange(month,0,11))return null;break;case"M":case"MM":month=matchInt- 1;if(outOfRange(month,0,11))return null;break;case"y":case"yy":case"yyyy":year=clength<4?expandYear(cal,matchInt):matchInt;if(outOfRange(year,0,9999))return null;break;case"h":case"hh":hour=matchInt;if(hour===12)hour=0;if(outOfRange(hour,0,11))return null;break;case"H":case"HH":hour=matchInt;if(outOfRange(hour,0,23))return null;break;case"m":case"mm":min=matchInt;if(outOfRange(min,0,59))return null;break;case"s":case"ss":sec=matchInt;if(outOfRange(sec,0,59))return null;break;case"tt":case"t":pmHour=cal.PM&&(matchGroup===cal.PM[0]||matchGroup===cal.PM[1]||matchGroup===cal.PM[2]);if(!pmHour&&(!cal.AM||(matchGroup!==cal.AM[0]&&matchGroup!==cal.AM[1]&&matchGroup!==cal.AM[2])))return null;break;case"f":case"ff":case"fff":msec=matchInt*Math.pow(10,3- clength);if(outOfRange(msec,0,999))return null;break;case"ddd":case"dddd":weekDay=getDayIndex(cal,matchGroup,clength===3);if(outOfRange(weekDay,0,6))return null;break;case"zzz":var offsets=matchGroup.split(/:/);if(offsets.length!==2)return null;hourOffset=parseInt(offsets[0],10);if(outOfRange(hourOffset,-12,13))return null;var minOffset=parseInt(offsets[1],10);if(outOfRange(minOffset,0,59))return null;tzMinOffset=(hourOffset*60)+(startsWith(matchGroup,"-")?-minOffset:minOffset);break;case"z":case"zz":hourOffset=matchInt;if(outOfRange(hourOffset,-12,13))return null;tzMinOffset=hourOffset*60;break;case"g":case"gg":var eraName=matchGroup;if(!eraName||!cal.eras)return null;eraName=trim(eraName.toLowerCase());for(var i=0,l=cal.eras.length;i<l;i++){if(eraName===cal.eras[i].name.toLowerCase()){era=i;break;}}
if(era===null)return null;break;}}}
var result=new Date(),defaultYear,convert=cal.convert;defaultYear=convert?convert.fromGregorian(result)[0]:result.getFullYear();if(year===null){year=defaultYear;}
else if(cal.eras){year+=cal.eras[(era||0)].offset;}
if(month===null){month=0;}
if(date===null){date=1;}
if(convert){result=convert.toGregorian(year,month,date);if(result===null)return null;}
else{result.setFullYear(year,month,date);if(result.getDate()!==date)return null;if(weekDay!==null&&result.getDay()!==weekDay){return null;}}
if(pmHour&&hour<12){hour+=12;}
result.setHours(hour,min,sec,msec);if(tzMinOffset!==null){var adjustedMin=result.getMinutes()-(tzMinOffset+ result.getTimezoneOffset());result.setHours(result.getHours()+ parseInt(adjustedMin/60,10),adjustedMin%60);}
return result;};}());parseNegativePattern=function(value,nf,negativePattern){var neg=nf["-"],pos=nf["+"],ret;switch(negativePattern){case"n -":neg=" "+ neg;pos=" "+ pos;case"n-":if(endsWith(value,neg)){ret=["-",value.substr(0,value.length- neg.length)];}
else if(endsWith(value,pos)){ret=["+",value.substr(0,value.length- pos.length)];}
break;case"- n":neg+=" ";pos+=" ";case"-n":if(startsWith(value,neg)){ret=["-",value.substr(neg.length)];}
else if(startsWith(value,pos)){ret=["+",value.substr(pos.length)];}
break;case"(n)":if(startsWith(value,"(")&&endsWith(value,")")){ret=["-",value.substr(1,value.length- 2)];}
break;}
return ret||["",value];};Globalize.prototype.findClosestCulture=function(cultureSelector){return Globalize.findClosestCulture.call(this,cultureSelector);};Globalize.prototype.format=function(value,format,cultureSelector){return Globalize.format.call(this,value,format,cultureSelector);};Globalize.prototype.localize=function(key,cultureSelector){return Globalize.localize.call(this,key,cultureSelector);};Globalize.prototype.parseInt=function(value,radix,cultureSelector){return Globalize.parseInt.call(this,value,radix,cultureSelector);};Globalize.prototype.parseFloat=function(value,radix,cultureSelector){return Globalize.parseFloat.call(this,value,radix,cultureSelector);};Globalize.prototype.culture=function(cultureSelector){return Globalize.culture.call(this,cultureSelector);};Globalize.addCultureInfo=function(cultureName,baseCultureName,info){var base={},isNew=false;if(typeof cultureName!=="string"){info=cultureName;cultureName=this.culture().name;base=this.cultures[cultureName];}else if(typeof baseCultureName!=="string"){info=baseCultureName;isNew=(this.cultures[cultureName]==null);base=this.cultures[cultureName]||this.cultures["default"];}else{isNew=true;base=this.cultures[baseCultureName];}
this.cultures[cultureName]=extend(true,{},base,info);if(isNew){this.cultures[cultureName].calendar=this.cultures[cultureName].calendars.standard;}};Globalize.findClosestCulture=function(name){var match;if(!name){return this.findClosestCulture(this.cultureSelector)||this.cultures["default"];}
if(typeof name==="string"){name=name.split(",");}
if(isArray(name)){var lang,cultures=this.cultures,list=name,i,l=list.length,prioritized=[];for(i=0;i<l;i++){name=trim(list[i]);var pri,parts=name.split(";");lang=trim(parts[0]);if(parts.length===1){pri=1;}
else{name=trim(parts[1]);if(name.indexOf("q=")===0){name=name.substr(2);pri=parseFloat(name);pri=isNaN(pri)?0:pri;}
else{pri=1;}}
prioritized.push({lang:lang,pri:pri});}
prioritized.sort(function(a,b){if(a.pri<b.pri){return 1;}else if(a.pri>b.pri){return-1;}
return 0;});for(i=0;i<l;i++){lang=prioritized[i].lang;match=cultures[lang];if(match){return match;}}
for(i=0;i<l;i++){lang=prioritized[i].lang;do{var index=lang.lastIndexOf("-");if(index===-1){break;}
lang=lang.substr(0,index);match=cultures[lang];if(match){return match;}}
while(1);}
for(i=0;i<l;i++){lang=prioritized[i].lang;for(var cultureKey in cultures){var culture=cultures[cultureKey];if(culture.language===lang){return culture;}}}}
else if(typeof name==="object"){return name;}
return match||null;};Globalize.format=function(value,format,cultureSelector){var culture=this.findClosestCulture(cultureSelector);if(value instanceof Date){value=formatDate(value,format,culture);}
else if(typeof value==="number"){value=formatNumber(value,format,culture);}
return value;};Globalize.localize=function(key,cultureSelector){return this.findClosestCulture(cultureSelector).messages[key]||this.cultures["default"].messages[key];};Globalize.parseDate=function(value,formats,culture){culture=this.findClosestCulture(culture);var date,prop,patterns;if(formats){if(typeof formats==="string"){formats=[formats];}
if(formats.length){for(var i=0,l=formats.length;i<l;i++){var format=formats[i];if(format){date=parseExact(value,format,culture);if(date){break;}}}}}else{patterns=culture.calendar.patterns;for(prop in patterns){date=parseExact(value,patterns[prop],culture);if(date){break;}}}
return date||null;};Globalize.parseInt=function(value,radix,cultureSelector){return truncate(Globalize.parseFloat(value,radix,cultureSelector));};Globalize.parseFloat=function(value,radix,cultureSelector){if(typeof radix!=="number"){cultureSelector=radix;radix=10;}
var culture=this.findClosestCulture(cultureSelector);var ret=NaN,nf=culture.numberFormat;if(value.indexOf(culture.numberFormat.currency.symbol)>-1){value=value.replace(culture.numberFormat.currency.symbol,"");value=value.replace(culture.numberFormat.currency["."],culture.numberFormat["."]);}
if(value.indexOf(culture.numberFormat.percent.symbol)>-1){value=value.replace(culture.numberFormat.percent.symbol,"");}
value=value.replace(/ /g,"");if(regexInfinity.test(value)){ret=parseFloat(value);}
else if(!radix&&regexHex.test(value)){ret=parseInt(value,16);}
else{var signInfo=parseNegativePattern(value,nf,nf.pattern[0]),sign=signInfo[0],num=signInfo[1];if(sign===""&&nf.pattern[0]!=="(n)"){signInfo=parseNegativePattern(value,nf,"(n)");sign=signInfo[0];num=signInfo[1];}
if(sign===""&&nf.pattern[0]!=="-n"){signInfo=parseNegativePattern(value,nf,"-n");sign=signInfo[0];num=signInfo[1];}
sign=sign||"+";var exponent,intAndFraction,exponentPos=num.indexOf("e");if(exponentPos<0)exponentPos=num.indexOf("E");if(exponentPos<0){intAndFraction=num;exponent=null;}
else{intAndFraction=num.substr(0,exponentPos);exponent=num.substr(exponentPos+ 1);}
var integer,fraction,decSep=nf["."],decimalPos=intAndFraction.indexOf(decSep);if(decimalPos<0){integer=intAndFraction;fraction=null;}
else{integer=intAndFraction.substr(0,decimalPos);fraction=intAndFraction.substr(decimalPos+ decSep.length);}
var groupSep=nf[","];integer=integer.split(groupSep).join("");var altGroupSep=groupSep.replace(/\u00A0/g," ");if(groupSep!==altGroupSep){integer=integer.split(altGroupSep).join("");}
var p=sign+ integer;if(fraction!==null){p+="."+ fraction;}
if(exponent!==null){var expSignInfo=parseNegativePattern(exponent,nf,"-n");p+="e"+(expSignInfo[0]||"+")+ expSignInfo[1];}
if(regexParseFloat.test(p)){ret=parseFloat(p);}}
return ret;};Globalize.culture=function(cultureSelector){if(typeof cultureSelector!=="undefined"){this.cultureSelector=cultureSelector;}
return this.findClosestCulture(cultureSelector)||this.cultures["default"];};}(this));