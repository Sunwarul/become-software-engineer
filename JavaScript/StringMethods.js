/**
 * String properties:
 * - length
 * - 
 * 
 * String Methods:
 * 
 * - slice(start, end) // end is exclusive & optional, and with -ve as backward
 * - substring(start, end) // end is exclusive & optional and value is 0 if -ve value provided
 * - substr(start, length) // length is optional, and -ve work backwards
 * 
 * - replace(findStr, replaceWithStr) or replace(/REGEX/ig, replaceWithStr)
 * - toUpperCase()
 * - toLowerCase()
 * - concat(str1, str2)
 * - trim(str)
 * - padStart(5, 'x')
 * - padEnd(9, '#')
 * - charAt(position)
 * - charCodeAt(position) returns a UTF-16 code from 0-65535
 * - str[0], str[9] etc is possible. But read-only. String are immutable. 
 * - split(',')
 * 
 * 
 * - str.indexOf("something", startPos) retuns pos
 * - str.lastIndexOf("something", startPos) it search from backwards
 * - str.search("something") retuns pos
 * - diff between search and indexOf is search() don't take second param startPos and indexOf can't take REGEX as search mechanism
 * - str.match(REGEX)
 * - str.includes("something", startPos) returns true/false based on found or not
 * - startsWith("something", start)
 * - endsWith("something", length)
 * /