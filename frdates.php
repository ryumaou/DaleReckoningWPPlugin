<?php

/*
Plugin Name: Dale Reckoning (Forgotten Realms) Dates
Plugin URI: http://www.fantasist.net/scroll/?page_id=586
Description: A WP plugin to let you blog in Dale Reckoning
Version: 0.99
Author:  J. K. Hoffman
Author URI: http://www.fantasist.net/
*/

function frdate($post_id,$before,$after){
        global $wpdb, $tableposts;
	$request = "SELECT unix_timestamp(post_date) as pdate FROM $tableposts WHERE id = $post_id ";
	$posts = $wpdb->get_results($request);
	
	foreach ($posts as $post) {
		$doy=date('z',$post->pdate)+1;
		$FRYear =date('Y',$post->pdate)-629;
		// We need to adjust that year based on the most current info, it was minus 629 until I read the Wikipedia entry about FR
	        $leapyear=date('L',$post->pdate);
	}

	if ($leapyear=1)
	  {
	   switch($doy){
	           case 1:
	           case 2:
	           case 3:
	           case 4:
	           case 5:
	           case 6:
	           case 7:
	           case 8:
	           case 9:
	           case 10:
	           case 11:
	           case 12:
	           case 13:
	           case 14:
	           case 15:
	           case 16:
	           case 17:
	           case 18:
	           case 19:
	           case 20:
	           case 21:
	           case 22:
	           case 23:
	           case 24:
	           case 25:
	           case 26:
	           case 27:
	           case 28:
	           case 29:
	           case 30:
	           	$Fmonth = "Hammer";
	          	$Fday = ($doy);
	          	break;
		   case 31:
	         	$Fmonth = "Midwinter ";
	         	$Fday = 0;
	         	break;
	           case 32:
	           case 33:
	           case 34:
	           case 35:
	           case 36:
	           case 37:
	           case 38:
	           case 39:
	           case 40:
	           case 41:
	           case 42:
	           case 43:
	           case 44:
	           case 45:
	           case 46:
	           case 47:
	           case 48:
	           case 49:
	           case 50:
	           case 51:
	           case 52:
	           case 53:
	           case 54:
	           case 55:
	           case 56:
	           case 57:
	           case 58:
	           case 59:
	           case 60:
	           case 61:
	                $Fmonth = "Alturiak";
	                $Fday = ($doy - 31);
	                break;
		   case 62:
		   case 63:
		   case 64:
		   case 65:
		   case 66:
		   case 67:
		   case 68:
		   case 69:
		   case 70:
		   case 71:
		   case 72:
		   case 73:
		   case 74:
		   case 75:
		   case 76:
		   case 77:
		   case 78:
		   case 79:
		   case 80:
		   case 81:
	           case 82:
	           case 83:
	           case 84:
	           case 85:
	           case 86:
	           case 87:
	           case 88:
	           case 89:
	           case 90:
	           case 91:
		        $Fmonth = "Ches";
		        $Fday = ($doy - 61);
		        break;
	           case 92:
	           case 93:
	           case 94:
	           case 95:
	           case 96:
	           case 97:
	           case 98:
	           case 99:
	           case 100:
	           case 101:
	           case 102:
	           case 103:
	           case 104:
	           case 105:
	           case 106:
	           case 107:
	           case 108:
	           case 109:
	           case 110:
	           case 111:
	           case 112:
	           case 113:
	           case 114:
	           case 115:
	           case 116:
	           case 117:
	           case 118:
	           case 119:
	           case 120:
	           case 121:
		        $Fmonth = "Tarkash";
		        $Fday = ($doy - 91);
		        break;
		   case 122:
		        $Fmonth = "Greengrass ";
		        $Fday = 0;
		        break;
		   case 123:
		   case 124:
	           case 125:
	           case 126:
	           case 127:
	           case 128:
	           case 129:
	           case 130:
	           case 131:
	           case 132:
	           case 133:
	           case 134:
	           case 135:
	           case 136:
	           case 137:
	           case 138:
	           case 139:
	           case 140:
	           case 141:
	           case 142:
	           case 143:
	           case 144:
	           case 145:
	           case 146:
	           case 147:
	           case 148:
	           case 149:
	           case 150:
	           case 151:
	           case 152:
		        $Fmonth = "Mirtul";
		        $Fday = ($doy - 122);
		        break;
		   case 153:
		   case 154:
	           case 155:
	           case 156:
	           case 157:
	           case 158:
	           case 159:
	           case 160:
	           case 161:
	           case 162:
		   case 163:
		   case 164:
		   case 165:
		   case 166:
		   case 167:
		   case 168:
		   case 169:
		   case 170:
		   case 171:
		   case 172:
		   case 173:
		   case 174:
		   case 175:
		   case 176:
		   case 177:
		   case 178:
		   case 179:
		   case 180:
		   case 181:
	           case 182:
		        $Fmonth = "Kythorn";
		        $Fday = ($doy - 152);
		        break;
		   case 183:
		   case 184:
	           case 185:
	           case 186:
	           case 187:
	           case 188:
	           case 189:
	           case 190:
	           case 191:
	           case 192:
	           case 193:
	           case 194:
	           case 195:
	           case 196:
	           case 197:
	           case 198:
	           case 199:
	           case 200:
	           case 201:
	           case 202:
	           case 203:
	           case 204:
	           case 205:
	           case 206:
	           case 207:
	           case 208:
	           case 209:
	           case 210:
	           case 211:
	           case 212:
		        $Fmonth = "Flamerule";
		        $Fday = ($doy - 182);
		        break;
	           case 213:
	                $Fmonth = "Midsummer ";
	                $Fday = 0;
	                break;
	           case 214:
	                $Fmonth = "Shieldmeet ";
	                $Fday = 0;
	                break;
	           case 215:
	           case 216:
	           case 217:
	           case 218:
	           case 219:
	           case 220:
	           case 221:
	           case 222:
	           case 223:
	           case 224:
	           case 225:
	           case 226:
	           case 227:
	           case 228:
	           case 229:
	           case 230:
	           case 231:
	           case 232:
	           case 233:
	           case 234:
	           case 235:
	           case 236:
	           case 237:
	           case 238:
	           case 239:
	           case 240:
	           case 241:
	           case 242:
	           case 243:
	           case 244:
	                $Fmonth = "Elesias";
	                $Fday = ($doy - 214);
	                break;
	           case 245:
	           case 246:
	           case 247:
	           case 248:
	           case 249:
	           case 250:
	           case 251:
	           case 252:
	           case 253:
	           case 254:
	           case 255:
	           case 256:
	           case 257:
	           case 258:
	           case 259:
	           case 260:
	           case 261:
	           case 262:
		   case 263:
		   case 264:
		   case 265:
		   case 266:
		   case 267:
		   case 268:
		   case 269:
		   case 270:
		   case 271:
		   case 272:
		   case 273:
		   case 274:
	                $Fmonth = "Eleint";
	                $Fday = ($doy - 244);	                
	                break;
	            case 275:
	                 $Fmonth = "Harvesttide ";
	                 $Fday = 0;
	                 break;
	            case 276:
	            case 277:
		    case 278:
		    case 279:
		    case 280:
		    case 281:
	            case 282:
	            case 283:
	            case 284:
	            case 285:
	            case 286:
	            case 287:
	            case 288:
	            case 289:
	            case 290:
	            case 291:
	            case 292:
	            case 293:
	            case 294:
	            case 295:
	            case 296:
	            case 297:
	            case 298:
	            case 299:
	            case 300:
	            case 301:
	            case 302:
	            case 303:
	            case 304:
	            case 305:
	                 $Fmonth = "Marpenoth";
	                 $Fday = ($doy - 275);
	                 break;	            
	            case 306:
	            case 307:
	            case 308:
	            case 309:
	            case 310:
	            case 311:
	            case 312:
	            case 313:
	            case 314:
	            case 315:
	            case 316:
	            case 317:
	            case 318:
	            case 319:
	            case 320:
	            case 321:
	            case 322:
	            case 323:
	            case 324:
	            case 325:
	            case 326:
	            case 327:
	            case 328:
	            case 329:
	            case 330:
	            case 331:
	            case 332:
	            case 333:
	            case 334:
	                 $Fmonth = "Uktar";
	                 $Fday = ($doy - 305);	            
	                 break;
	            case 335:
	                 $Fmonth = "The Feast of the Moon ";
	                 $Fday = 0;
	                 break;
	            case 336:
	            case 337:
	            case 338:
	            case 339:
	            case 340:
	            case 341:
	            case 342:
	            case 343:
	            case 344:
	            case 345:
	            case 346:
	            case 347:
	            case 348:
	            case 349:
	            case 350:
	            case 351:
	            case 352:
	            case 353:
	            case 354:
	            case 355:
	            case 356:
	            case 357:
	            case 358:
	            case 359:
	            case 360:
	            case 361:
	            case 362:
	            case 363:
	            case 364:
	            case 365:
	            case 366:
	                 $Fmonth = "Nightal";
	                 $Fday = ($doy - 336);
	                 break;
	            default:
	                 $Fmonth = "Error";
	                 $Fday = 0;
	           }
        }
	else
	    {
	         switch($doy){
	           case 1:
	           case 2:
	           case 3:
	           case 4:
	           case 5:
	           case 6:
	           case 7:
	           case 8:
	           case 9:
	           case 10:
	           case 11:
	           case 12:
	           case 13:
	           case 14:
	           case 15:
	           case 16:
	           case 17:
	           case 18:
	           case 19:
	           case 20:
	           case 21:
	           case 22:
	           case 23:
	           case 24:
	           case 25:
	           case 26:
	           case 27:
	           case 28:
	           case 29:
	           case 30:
	           	$Fmonth = "Hammer";
	          	$Fday = ($doy);
	          	break;
		   case 31:
	         	$Fmonth = "Midwinter ";
	         	$Fday = 0;
	         	break;
	           case 32:
	           case 33:
	           case 34:
	           case 35:
	           case 36:
	           case 37:
	           case 38:
	           case 39:
	           case 40:
	           case 41:
	           case 42:
	           case 43:
	           case 44:
	           case 45:
	           case 46:
	           case 47:
	           case 48:
	           case 49:
	           case 50:
	           case 51:
	           case 52:
	           case 53:
	           case 54:
	           case 55:
	           case 56:
	           case 57:
	           case 58:
	           case 59:
	           case 60:
	           case 61:
	                $Fmonth = "Alturiak";
	                $Fday = ($doy - 31);
	                break;
		   case 62:
		   case 63:
		   case 64:
		   case 65:
		   case 66:
		   case 67:
		   case 68:
		   case 69:
		   case 70:
		   case 71:
		   case 72:
		   case 73:
		   case 74:
		   case 75:
		   case 76:
		   case 77:
		   case 78:
		   case 79:
		   case 80:
		   case 81:
	           case 82:
	           case 83:
	           case 84:
	           case 85:
	           case 86:
	           case 87:
	           case 88:
	           case 89:
	           case 90:
	           case 91:
		        $Fmonth = "Ches";
		        $Fday = ($doy - 61);
		        break;
	           case 92:
	           case 93:
	           case 94:
	           case 95:
	           case 96:
	           case 97:
	           case 98:
	           case 99:
	           case 100:
	           case 101:
	           case 102:
	           case 103:
	           case 104:
	           case 105:
	           case 106:
	           case 107:
	           case 108:
	           case 109:
	           case 110:
	           case 111:
	           case 112:
	           case 113:
	           case 114:
	           case 115:
	           case 116:
	           case 117:
	           case 118:
	           case 119:
	           case 120:
	           case 121:
		        $Fmonth = "Tarkash";
		        $Fday = ($doy - 91);
		        break;
		   case 122:
		        $Fmonth = "Greengrass ";
		        $Fday = 0;
		        break;
		   case 123:
		   case 124:
	           case 125:
	           case 126:
	           case 127:
	           case 128:
	           case 129:
	           case 130:
	           case 131:
	           case 132:
	           case 133:
	           case 134:
	           case 135:
	           case 136:
	           case 137:
	           case 138:
	           case 139:
	           case 140:
	           case 141:
	           case 142:
	           case 143:
	           case 144:
	           case 145:
	           case 146:
	           case 147:
	           case 148:
	           case 149:
	           case 150:
	           case 151:
	           case 152:
		        $Fmonth = "Mirtul";
		        $Fday = ($doy - 122);
		        break;
		   case 153:
		   case 154:
	           case 155:
	           case 156:
	           case 157:
	           case 158:
	           case 159:
	           case 160:
	           case 161:
	           case 162:
		   case 163:
		   case 164:
		   case 165:
		   case 166:
		   case 167:
		   case 168:
		   case 169:
		   case 170:
		   case 171:
		   case 172:
		   case 173:
		   case 174:
		   case 175:
		   case 176:
		   case 177:
		   case 178:
		   case 179:
		   case 180:
		   case 181:
	           case 182:
		        $Fmonth = "Kythorn";
		        $Fday = ($doy - 152);
		        break;
		   case 183:
		   case 184:
	           case 185:
	           case 186:
	           case 187:
	           case 188:
	           case 189:
	           case 190:
	           case 191:
	           case 192:
	           case 193:
	           case 194:
	           case 195:
	           case 196:
	           case 197:
	           case 198:
	           case 199:
	           case 200:
	           case 201:
	           case 202:
	           case 203:
	           case 204:
	           case 205:
	           case 206:
	           case 207:
	           case 208:
	           case 209:
	           case 210:
	           case 211:
	           case 212:
		        $Fmonth = "Flamerule";
		        $Fday = ($doy - 182);
		        break;
	           case 213:
	                $Fmonth = "Midsummer ";
	                $Fday = 0;
	                break;
	           case 214:
	           case 215:
	           case 216:
	           case 217:
	           case 218:
	           case 219:
	           case 220:
	           case 221:
	           case 222:
	           case 223:
	           case 224:
	           case 225:
	           case 226:
	           case 227:
	           case 228:
	           case 229:
	           case 230:
	           case 231:
	           case 232:
	           case 233:
	           case 234:
	           case 235:
	           case 236:
	           case 237:
	           case 238:
	           case 239:
	           case 240:
	           case 241:
	           case 242:
	           case 243:
	                $Fmonth = "Elesias";
	                $Fday = ($doy - 213);
	                break;
	           case 244:
	           case 245:
	           case 246:
	           case 247:
	           case 248:
	           case 249:
	           case 250:
	           case 251:
	           case 252:
	           case 253:
	           case 254:
	           case 255:
	           case 256:
	           case 257:
	           case 258:
	           case 259:
	           case 260:
	           case 261:
	           case 262:
		   case 263:
		   case 264:
		   case 265:
		   case 266:
		   case 267:
		   case 268:
		   case 269:
		   case 270:
		   case 271:
		   case 272:
		   case 273:
		        $Fmonth = "Eleint";
	                $Fday = ($doy - 243);	                
	                break;
	            case 274:
	                 $Fmonth = "Harvesttide ";
	                 $Fday = 0;
	                 break;
	            case 275:
	            case 276:
	            case 277:
		    case 278:
		    case 279:
		    case 280:
		    case 281:
	            case 282:
	            case 283:
	            case 284:
	            case 285:
	            case 286:
	            case 287:
	            case 288:
	            case 289:
	            case 290:
	            case 291:
	            case 292:
	            case 293:
	            case 294:
	            case 295:
	            case 296:
	            case 297:
	            case 298:
	            case 299:
	            case 300:
	            case 301:
	            case 302:
	            case 303:
	            case 304:
	                 $Fmonth = "Marpenoth";
	                 $Fday = ($doy - 274);
	                 break;	            
	            case 305:
	            case 306:
	            case 307:
	            case 308:
	            case 309:
	            case 310:
	            case 311:
	            case 312:
	            case 313:
	            case 314:
	            case 315:
	            case 316:
	            case 317:
	            case 318:
	            case 319:
	            case 320:
	            case 321:
	            case 322:
	            case 323:
	            case 324:
	            case 325:
	            case 326:
	            case 327:
	            case 328:
	            case 329:
	            case 330:
	            case 331:
	            case 332:
	            case 333:
	                 $Fmonth = "Uktar";
	                 $Fday = ($doy - 304);	            
	                 break;
	            case 334:
	                 $Fmonth = "The Feast of the Moon ";
	                 $Fday = 0;
	                 break;
	            case 335:
	            case 336:
	            case 337:
	            case 338:
	            case 339:
	            case 340:
	            case 341:
	            case 342:
	            case 343:
	            case 344:
	            case 345:
	            case 346:
	            case 347:
	            case 348:
	            case 349:
	            case 350:
	            case 351:
	            case 352:
	            case 353:
	            case 354:
	            case 355:
	            case 356:
	            case 357:
	            case 358:
	            case 359:
	            case 360:
	            case 361:
	            case 362:
	            case 363:
	            case 364:
	            case 365:
	                 $Fmonth = "Nightal";
	                 $Fday = ($doy - 335);
	                 break;
	            default:
	                 $Fmonth = "Error";
	                 $Fday = 0;
	    	}
	 }
	 
	 if ($Fday>0)
	     {
	     	$frday=$before.$Fmonth." ".nthnum($Fday,$small=1).", ".$FRYear.$after;
	     }
	  else 
	     {
	     	$frday=$before.$Fmonth." ".$FRYear.$after;
	     }

         //return $frday;
         echo $frday;

}

function get_frcalendar($daylength = 1) {
    global $wpdb, $m, $monthnum, $year, $timedifference, $month, $month_abbrev, $weekday, $weekday_initial, $weekday_abbrev, $posts;

    // Quick check. If we have no posts at all, abort!
    if (!$posts) {
        $gotsome = $wpdb->get_var("SELECT ID from $wpdb->posts WHERE post_status = 'publish' ORDER BY post_date DESC LIMIT 1");
        if (!$gotsome)
            return;
    }

    if (isset($_GET['w'])) {
        $w = ''.intval($_GET['w']);
    }

    $add_hours = intval(get_settings('gmt_offset'));
    $add_minutes = intval(60 * (get_settings('gmt_offset') - $add_hours));

    // Let's figure out when we are
    if (!empty($monthnum) && !empty($year)) {
        $thismonth = ''.zeroise(intval($monthnum), 2);
        $thisyear = ''.intval($year);
    } elseif (!empty($w)) {
        // We need to get the month from MySQL
        $thisyear = ''.intval(substr($m, 0, 4));
        $d = (($w - 1) * 7) + 6; //it seems MySQL's weeks disagree with PHP's
        $thismonth = $wpdb->get_var("SELECT DATE_FORMAT((DATE_ADD('${thisyear}0101', INTERVAL $d DAY) ), '%m')");
    } elseif (!empty($m)) {
        $calendar = substr($m, 0, 6);
        $thisyear = ''.intval(substr($m, 0, 4));
        if (strlen($m) < 6) {
            $thismonth = '01';
        } else {
            $thismonth = ''.zeroise(intval(substr($m, 4, 2)), 2);
        }
    } else {
        $thisyear = gmdate('Y', current_time('timestamp') + get_settings('gmt_offset') * 3600);
        $thismonth = gmdate('m', current_time('timestamp') + get_settings('gmt_offset') * 3600);
    }

    $unixmonth = mktime(0, 0 , 0, $thismonth, 1, $thisyear);
    $frleapyear=date("L", mktime(0, 0, 0, $thismonth, 1, $thisyear));
        $frdoy=date("z", mktime(0, 0, 0, $thismonth, 1, $thisyear))+1;
	if ($frleapyear=1)
	  {
	   switch($frdoy){
	           case 1:
	           case 2:
	           case 3:
	           case 4:
	           case 5:
	           case 6:
	           case 7:
	           case 8:
	           case 9:
	           case 10:
	           case 11:
	           case 12:
	           case 13:
	           case 14:
	           case 15:
	           case 16:
	           case 17:
	           case 18:
	           case 19:
	           case 20:
	           case 21:
	           case 22:
	           case 23:
	           case 24:
	           case 25:
	           case 26:
	           case 27:
	           case 28:
	           case 29:
	           case 30:
	          	$FRDay = ($frdoy);
	          	break;
		   case 31:
	         	$FRDay = 0;
	         	break;
	           case 32:
	           case 33:
	           case 34:
	           case 35:
	           case 36:
	           case 37:
	           case 38:
	           case 39:
	           case 40:
	           case 41:
	           case 42:
	           case 43:
	           case 44:
	           case 45:
	           case 46:
	           case 47:
	           case 48:
	           case 49:
	           case 50:
	           case 51:
	           case 52:
	           case 53:
	           case 54:
	           case 55:
	           case 56:
	           case 57:
	           case 58:
	           case 59:
	           case 60:
	           case 61:
	                $FRDay = ($frdoy - 31);
	                break;
		   case 62:
		   case 63:
		   case 64:
		   case 65:
		   case 66:
		   case 67:
		   case 68:
		   case 69:
		   case 70:
		   case 71:
		   case 72:
		   case 73:
		   case 74:
		   case 75:
		   case 76:
		   case 77:
		   case 78:
		   case 79:
		   case 80:
		   case 81:
	           case 82:
	           case 83:
	           case 84:
	           case 85:
	           case 86:
	           case 87:
	           case 88:
	           case 89:
	           case 90:
	           case 91:
		        $FRDay = ($frdoy - 61);
		        break;
	           case 92:
	           case 93:
	           case 94:
	           case 95:
	           case 96:
	           case 97:
	           case 98:
	           case 99:
	           case 100:
	           case 101:
	           case 102:
	           case 103:
	           case 104:
	           case 105:
	           case 106:
	           case 107:
	           case 108:
	           case 109:
	           case 110:
	           case 111:
	           case 112:
	           case 113:
	           case 114:
	           case 115:
	           case 116:
	           case 117:
	           case 118:
	           case 119:
	           case 120:
	           case 121:
		        $FRDay = ($frdoy - 91);
		        break;
		   case 122:
		        $FRDay = 0;
		        break;
		   case 123:
		   case 124:
	           case 125:
	           case 126:
	           case 127:
	           case 128:
	           case 129:
	           case 130:
	           case 131:
	           case 132:
	           case 133:
	           case 134:
	           case 135:
	           case 136:
	           case 137:
	           case 138:
	           case 139:
	           case 140:
	           case 141:
	           case 142:
	           case 143:
	           case 144:
	           case 145:
	           case 146:
	           case 147:
	           case 148:
	           case 149:
	           case 150:
	           case 151:
	           case 152:
		        $FRDay = ($frdoy - 122);
		        break;
		   case 153:
		   case 154:
	           case 155:
	           case 156:
	           case 157:
	           case 158:
	           case 159:
	           case 160:
	           case 161:
	           case 162:
		   case 163:
		   case 164:
		   case 165:
		   case 166:
		   case 167:
		   case 168:
		   case 169:
		   case 170:
		   case 171:
		   case 172:
		   case 173:
		   case 174:
		   case 175:
		   case 176:
		   case 177:
		   case 178:
		   case 179:
		   case 180:
		   case 181:
	           case 182:
		        $FRDay = ($frdoy - 152);
		        break;
		   case 183:
		   case 184:
	           case 185:
	           case 186:
	           case 187:
	           case 188:
	           case 189:
	           case 190:
	           case 191:
	           case 192:
	           case 193:
	           case 194:
	           case 195:
	           case 196:
	           case 197:
	           case 198:
	           case 199:
	           case 200:
	           case 201:
	           case 202:
	           case 203:
	           case 204:
	           case 205:
	           case 206:
	           case 207:
	           case 208:
	           case 209:
	           case 210:
	           case 211:
	           case 212:
		        $FRDay = ($frdoy - 182);
		        break;
	           case 213:
	                $FRDay = 0;
	                break;
	           case 214:
	                $FRDay = 0;
	                break;
	           case 215:
	           case 216:
	           case 217:
	           case 218:
	           case 219:
	           case 220:
	           case 221:
	           case 222:
	           case 223:
	           case 224:
	           case 225:
	           case 226:
	           case 227:
	           case 228:
	           case 229:
	           case 230:
	           case 231:
	           case 232:
	           case 233:
	           case 234:
	           case 235:
	           case 236:
	           case 237:
	           case 238:
	           case 239:
	           case 240:
	           case 241:
	           case 242:
	           case 243:
	           case 244:
	                $FRDay = ($frdoy - 214);
	                break;
	           case 245:
	           case 246:
	           case 247:
	           case 248:
	           case 249:
	           case 250:
	           case 251:
	           case 252:
	           case 253:
	           case 254:
	           case 255:
	           case 256:
	           case 257:
	           case 258:
	           case 259:
	           case 260:
	           case 261:
	           case 262:
		   case 263:
		   case 264:
		   case 265:
		   case 266:
		   case 267:
		   case 268:
		   case 269:
		   case 270:
		   case 271:
		   case 272:
		   case 273:
		   case 274:
	                $FRDay = ($frdoy - 244);	                
	                break;
	            case 275:
	                 $FRDay = 0;
	                 break;
	            case 276:
	            case 277:
		    case 278:
		    case 279:
		    case 280:
		    case 281:
	            case 282:
	            case 283:
	            case 284:
	            case 285:
	            case 286:
	            case 287:
	            case 288:
	            case 289:
	            case 290:
	            case 291:
	            case 292:
	            case 293:
	            case 294:
	            case 295:
	            case 296:
	            case 297:
	            case 298:
	            case 299:
	            case 300:
	            case 301:
	            case 302:
	            case 303:
	            case 304:
	            case 305:
	                 $FRDay = ($frdoy - 275);
	                 break;	            
	            case 306:
	            case 307:
	            case 308:
	            case 309:
	            case 310:
	            case 311:
	            case 312:
	            case 313:
	            case 314:
	            case 315:
	            case 316:
	            case 317:
	            case 318:
	            case 319:
	            case 320:
	            case 321:
	            case 322:
	            case 323:
	            case 324:
	            case 325:
	            case 326:
	            case 327:
	            case 328:
	            case 329:
	            case 330:
	            case 331:
	            case 332:
	            case 333:
	            case 334:
	                 $FRDay = ($frdoy - 305);	            
	                 break;
	            case 335:
	                 $FRDay = 0;
	                 break;
	            case 336:
	            case 337:
	            case 338:
	            case 339:
	            case 340:
	            case 341:
	            case 342:
	            case 343:
	            case 344:
	            case 345:
	            case 346:
	            case 347:
	            case 348:
	            case 349:
	            case 350:
	            case 351:
	            case 352:
	            case 353:
	            case 354:
	            case 355:
	            case 356:
	            case 357:
	            case 358:
	            case 359:
	            case 360:
	            case 361:
	            case 362:
	            case 363:
	            case 364:
	            case 365:
	            case 366:
	                 $FRDay = ($frdoy - 336);
	                 break;
	            default:
	                 $Fmonth = "Error";
	                 $FRDay = 0;
	           }
        }
	else
	    {
	         switch($frdoy){
	           case 1:
	           case 2:
	           case 3:
	           case 4:
	           case 5:
	           case 6:
	           case 7:
	           case 8:
	           case 9:
	           case 10:
	           case 11:
	           case 12:
	           case 13:
	           case 14:
	           case 15:
	           case 16:
	           case 17:
	           case 18:
	           case 19:
	           case 20:
	           case 21:
	           case 22:
	           case 23:
	           case 24:
	           case 25:
	           case 26:
	           case 27:
	           case 28:
	           case 29:
	           case 30:
	          	$FRDay = ($frdoy);
	          	break;
		   case 31:
	         	$FRDay = 0;
	         	break;
	           case 32:
	           case 33:
	           case 34:
	           case 35:
	           case 36:
	           case 37:
	           case 38:
	           case 39:
	           case 40:
	           case 41:
	           case 42:
	           case 43:
	           case 44:
	           case 45:
	           case 46:
	           case 47:
	           case 48:
	           case 49:
	           case 50:
	           case 51:
	           case 52:
	           case 53:
	           case 54:
	           case 55:
	           case 56:
	           case 57:
	           case 58:
	           case 59:
	           case 60:
	           case 61:
	                $FRDay = ($frdoy - 31);
	                break;
		   case 62:
		   case 63:
		   case 64:
		   case 65:
		   case 66:
		   case 67:
		   case 68:
		   case 69:
		   case 70:
		   case 71:
		   case 72:
		   case 73:
		   case 74:
		   case 75:
		   case 76:
		   case 77:
		   case 78:
		   case 79:
		   case 80:
		   case 81:
	           case 82:
	           case 83:
	           case 84:
	           case 85:
	           case 86:
	           case 87:
	           case 88:
	           case 89:
	           case 90:
	           case 91:
		        $FRDay = ($frdoy - 61);
		        break;
	           case 92:
	           case 93:
	           case 94:
	           case 95:
	           case 96:
	           case 97:
	           case 98:
	           case 99:
	           case 100:
	           case 101:
	           case 102:
	           case 103:
	           case 104:
	           case 105:
	           case 106:
	           case 107:
	           case 108:
	           case 109:
	           case 110:
	           case 111:
	           case 112:
	           case 113:
	           case 114:
	           case 115:
	           case 116:
	           case 117:
	           case 118:
	           case 119:
	           case 120:
	           case 121:
		        $FRDay = ($frdoy - 91);
		        break;
		   case 122:
		        $FRDay = 0;
		        break;
		   case 123:
		   case 124:
	           case 125:
	           case 126:
	           case 127:
	           case 128:
	           case 129:
	           case 130:
	           case 131:
	           case 132:
	           case 133:
	           case 134:
	           case 135:
	           case 136:
	           case 137:
	           case 138:
	           case 139:
	           case 140:
	           case 141:
	           case 142:
	           case 143:
	           case 144:
	           case 145:
	           case 146:
	           case 147:
	           case 148:
	           case 149:
	           case 150:
	           case 151:
	           case 152:
	               $FRDay = ($frdoy - 122);
		        break;
		   case 153:
		   case 154:
	           case 155:
	           case 156:
	           case 157:
	           case 158:
	           case 159:
	           case 160:
	           case 161:
	           case 162:
		   case 163:
		   case 164:
		   case 165:
		   case 166:
		   case 167:
		   case 168:
		   case 169:
		   case 170:
		   case 171:
		   case 172:
		   case 173:
		   case 174:
		   case 175:
		   case 176:
		   case 177:
		   case 178:
		   case 179:
		   case 180:
		   case 181:
	           case 182:
		        $FRDay = ($frdoy - 152);
		        break;
		   case 183:
		   case 184:
	           case 185:
	           case 186:
	           case 187:
	           case 188:
	           case 189:
	           case 190:
	           case 191:
	           case 192:
	           case 193:
	           case 194:
	           case 195:
	           case 196:
	           case 197:
	           case 198:
	           case 199:
	           case 200:
	           case 201:
	           case 202:
	           case 203:
	           case 204:
	           case 205:
	           case 206:
	           case 207:
	           case 208:
	           case 209:
	           case 210:
	           case 211:
	           case 212:
		        $FRDay = ($frdoy - 182);
		        break;
	           case 213:
	                $FRDay = 0;
	                break;
	           case 214:
	           case 215:
	           case 216:
	           case 217:
	           case 218:
	           case 219:
	           case 220:
	           case 221:
	           case 222:
	           case 223:
	           case 224:
	           case 225:
	           case 226:
	           case 227:
	           case 228:
	           case 229:
	           case 230:
	           case 231:
	           case 232:
	           case 233:
	           case 234:
	           case 235:
	           case 236:
	           case 237:
	           case 238:
	           case 239:
	           case 240:
	           case 241:
	           case 242:
	           case 243:
	                $FRDay = ($frdoy - 213);
	                break;
	           case 244:
	           case 245:
	           case 246:
	           case 247:
	           case 248:
	           case 249:
	           case 250:
	           case 251:
	           case 252:
	           case 253:
	           case 254:
	           case 255:
	           case 256:
	           case 257:
	           case 258:
	           case 259:
	           case 260:
	           case 261:
	           case 262:
		   case 263:
		   case 264:
		   case 265:
		   case 266:
		   case 267:
		   case 268:
		   case 269:
		   case 270:
		   case 271:
		   case 272:
		   case 273:
	                $FRDay = ($frdoy - 243);	                
	                break;
	            case 274:
	                 $FRDay = 0;
	                 break;
	            case 275:
	            case 276:
	            case 277:
		    case 278:
		    case 279:
		    case 280:
		    case 281:
	            case 282:
	            case 283:
	            case 284:
	            case 285:
	            case 286:
	            case 287:
	            case 288:
	            case 289:
	            case 290:
	            case 291:
	            case 292:
	            case 293:
	            case 294:
	            case 295:
	            case 296:
	            case 297:
	            case 298:
	            case 299:
	            case 300:
	            case 301:
	            case 302:
	            case 303:
	            case 304:
	                 $FRDay = ($frdoy - 274);
	                 break;	            
	            case 305:
	            case 306:
	            case 307:
	            case 308:
	            case 309:
	            case 310:
	            case 311:
	            case 312:
	            case 313:
	            case 314:
	            case 315:
	            case 316:
	            case 317:
	            case 318:
	            case 319:
	            case 320:
	            case 321:
	            case 322:
	            case 323:
	            case 324:
	            case 325:
	            case 326:
	            case 327:
	            case 328:
	            case 329:
	            case 330:
	            case 331:
	            case 332:
	            case 333:
	                 $FRDay = ($frdoy - 304);	            
	                 break;
	            case 334:
	                 $FRDay = 0;
	                 break;
	            case 335:
	            case 336:
	            case 337:
	            case 338:
	            case 339:
	            case 340:
	            case 341:
	            case 342:
	            case 343:
	            case 344:
	            case 345:
	            case 346:
	            case 347:
	            case 348:
	            case 349:
	            case 350:
	            case 351:
	            case 352:
	            case 353:
	            case 354:
	            case 355:
	            case 356:
	            case 357:
	            case 358:
	            case 359:
	            case 360:
	            case 361:
	            case 362:
	            case 363:
	            case 364:
	            case 365:
	                 $FRDay = ($frdoy - 335);
	                 break;
	            default:
	                 $Fmonth = "Error";
	                 $FRDay = 0;
	    	}
	 }
    // Get the next and previous month and year with at least one post
    $previous = $wpdb->get_row("SELECT DISTINCT MONTH(post_date) AS month, YEAR(post_date) AS year
            FROM $wpdb->posts
            WHERE post_date < '$thisyear-$thismonth-01'
            AND post_status = 'publish'
                              ORDER BY post_date DESC
                              LIMIT 1");
    $next = $wpdb->get_row("SELECT  DISTINCT MONTH(post_date) AS month, YEAR(post_date) AS year
            FROM $wpdb->posts
            WHERE post_date >  '$thisyear-$thismonth-01'
            AND MONTH( post_date ) != MONTH( '$thisyear-$thismonth-01' )
            AND post_status = 'publish'
                              ORDER  BY post_date ASC
                              LIMIT 1");
     $mythismonth=$month[zeroise($thismonth, 2)];
     switch($mythismonth){
     	    case 'January':
     	        $myfrmonth="Hammer";
     	        break;
     	    case 'February':
     	        $myfrmonth="Alturiak";
     	        break;
     	    case 'March':
     	        $myfrmonth="Ches";
     	        break;
     	    case 'April':
     	        $myfrmonth="Tarkash";
     	        break;
     	    case 'May':
     	        $myfrmonth="Mirtul";
     	        break;
     	    case 'June':
     	        $myfrmonth="Kythorn";
     	        break;
     	    case 'July':
     	        $myfrmonth="Flamerule";
     	        break;
     	    case 'August':
     	        $myfrmonth="Elesias";
     	        break;
     	    case 'September':
     	        $myfrmonth="Eleint";
     	        break;
     	    case 'October':
     	        $myfrmonth="Marpenoth";
     	        break;
     	    case 'November':
     	        $myfrmonth="Uktar";
     	        break;
     	    case 'December':
     	         $myfrmonth="Nightal";
     	        break;	    
     	}
     $mythisfryear=date('Y', $unixmonth)-629;

    echo '<table id="wp-calendar">
    <caption>' . $myfrmonth . ' ' . $mythisfryear . '</caption>
    <thead>
    <tr>';

    $day_abbrev = $weekday_initial;
    if ($daylength > 1) {
        $day_abbrev = $weekday_abbrev;
    }

    foreach ($weekday as $wd) {
        echo "\n\t\t<th abbr=\"$wd\" scope=\"col\" title=\"$wd\">" . $day_abbrev[$wd] . '</th>';
    }

    echo '
    </tr>
    </thead>

    <tfoot>
    <tr>';
    $mylastmonth=$month[zeroise($previous->month, 2)];
     switch($mylastmonth){
     	    case 'January':
     	        $mylastfrmonth="Hammer";
     	        break;
     	    case 'February':
     	        $mylastfrmonth="Alturiak";
     	        break;
     	    case 'March':
     	        $mylastfrmonth="Ches";
     	        break;
     	    case 'April':
     	        $mylastfrmonth="Tarkash";
     	        break;
     	    case 'May':
     	        $mylastfrmonth="Mirtul";
     	        break;
     	    case 'June':
     	        $mylastfrmonth="Kythorn";
     	        break;
     	    case 'July':
     	        $mylastfrmonth="Flamerule";
     	        break;
     	    case 'August':
     	        $mylastfrmonth="Elesias";
     	        break;
     	    case 'September':
     	        $mylastfrmonth="Eleint";
     	        break;
     	    case 'October':
     	        $mylastfrmonth="Marpenoth";
     	        break;
     	    case 'November':
     	        $mylastfrmonth="Uktar";
     	        break;
     	    case 'December':
     	         $mylastfrmonth="Nightal";
     	        break;	    
     	}
     	    $mynextmonth=$month[zeroise($next->month, 2)];
     switch($mynextmonth){
     	    case 'January':
     	        $mynextfrmonth="Hammer";
     	        break;
     	    case 'February':
     	        $mynextfrmonth="Alturiak";
     	        break;
     	    case 'March':
     	        $mynextfrmonth="Ches";
     	        break;
     	    case 'April':
     	        $mynextfrmonth="Tarkash";
     	        break;
     	    case 'May':
     	        $mynextfrmonth="Mirtul";
     	        break;
     	    case 'June':
     	        $mynextfrmonth="Kythorn";
     	        break;
     	    case 'July':
     	        $mynextfrmonth="Flamerule";
     	        break;
     	    case 'August':
     	        $mynextfrmonth="Elesias";
     	        break;
     	    case 'September':
     	        $mynextfrmonth="Eleint";
     	        break;
     	    case 'October':
     	        $mynextfrmonth="Marpenoth";
     	        break;
     	    case 'November':
     	        $mynextfrmonth="Uktar";
     	        break;
     	    case 'December':
     	         $mynextfrmonth="Nightal";
     	        break;	    
     	}


    if ($previous) {
        echo "\n\t\t".'<td abbr="' . $mylastfrmonth . '" colspan="3" id="prev"><a href="' .
            get_month_link($previous->year, $previous->month) . '" title="' . sprintf(__('View posts for %1$s %2$s'), $mylastfrmonth, (date('Y', mktime(0, 0 , 0, $previous->month, 1, $previous->year)))-629) . '">&laquo; ' . $mylastfrmonth . '</a></td>';
    } else {
        echo "\n\t\t".'<td colspan="3" id="prev" class="pad">&nbsp;</td>';
    }

    echo "\n\t\t".'<td class="pad">&nbsp;</td>';

    if ($next) {
        echo "\n\t\t".'<td abbr="' . $mynextfrmonth . '" colspan="3" id="next"><a href="' .
                get_month_link($next->year, $next->month) . '" title="View posts for ' . $mynextfrmonth . ' ' .
                (date('Y', mktime(0, 0 , 0, $next->month, 1, $next->year))-629) . '">' . $mynextfrmonth . ' &raquo;</a></td>';
    } else {
        echo "\n\t\t".'<td colspan="3" id="next" class="pad">&nbsp;</td>';
    }

    echo '
    </tr>
    </tfoot>

    <tbody>
    <tr>';

    // Get days with posts
    $dayswithposts = $wpdb->get_results("SELECT DISTINCT DAYOFMONTH(post_date)
            FROM $wpdb->posts WHERE MONTH(post_date) = $thismonth
            AND YEAR(post_date) = $thisyear
            AND post_status = 'publish'
            AND post_date < '" . current_time('mysql') . '\'', ARRAY_N);
    if ($dayswithposts) {
        foreach ($dayswithposts as $daywith) {
            $daywithpost[] = $daywith[0];
        }
    } else {
        $daywithpost = array();
    }



    if (strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE') ||
          strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'camino') ||
          strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'safari')) {
        $ak_title_separator = "\n";
    } else {
        $ak_title_separator = ', ';
    }

    $ak_titles_for_day = array();
    $ak_post_titles = $wpdb->get_results("SELECT post_title, DAYOFMONTH(post_date) as dom "
                                         ."FROM $wpdb->posts "
                                         ."WHERE YEAR(post_date) = '$thisyear' "
                                         ."AND MONTH(post_date) = '$thismonth' "
                                         ."AND post_date < '".current_time('mysql')."' "
                                         ."AND post_status = 'publish'"
                                        );
    if ($ak_post_titles) {
        foreach ($ak_post_titles as $ak_post_title) {
            if (empty($ak_titles_for_day['day_'.$ak_post_title->dom])) {
                $ak_titles_for_day['day_'.$ak_post_title->dom] = '';
            }
            if (empty($ak_titles_for_day["$ak_post_title->dom"])) { // first one
                $ak_titles_for_day["$ak_post_title->dom"] = str_replace('"', '&quot;', wptexturize($ak_post_title->post_title));
            } else {
                $ak_titles_for_day["$ak_post_title->dom"] .= $ak_title_separator . str_replace('"', '&quot;', wptexturize($ak_post_title->post_title));
            }
        }
    }


    // See how much we should pad in the beginning
    $pad = intval(date('w', $unixmonth));
    if (0 != $pad) echo "\n\t\t".'<td colspan="'.$pad.'" class="pad">&nbsp;</td>';

    $daysinmonth = intval(date('t', $unixmonth));
    for ($day = 1; $day <= $daysinmonth; ++$day) {
    	if (isset($newrow) && $newrow)
            echo "\n\t</tr>\n\t<tr>\n\t\t";
        $newrow = false;

        if ($day == gmdate('j', (time() + (get_settings('gmt_offset') * 3600))) && $thismonth == gmdate('m', time()+(get_settings('gmt_offset') * 3600)) && $thisyear == gmdate('Y', time()+(get_settings('gmt_offset') * 3600)))
            echo '<td id="today">';
        else
            echo '<td>';

        if (in_array($day, $daywithpost)) { // any posts today?
            if ($FRDay <= 0){
            	echo '<b><a href="' . get_day_link($thisyear, $thismonth, $day) . "\" title=\"$ak_titles_for_day[$day]\"><font color=#ff0000>H</font></a></b>";
             } else {
             	echo '<a href="' . get_day_link($thisyear, $thismonth, $day) . "\" title=\"$ak_titles_for_day[$day]\">$FRDay</a>";
             }
        } else {
            if ($FRDay <= 0){
            	echo '<b><font color=#ff0000>H</font></b>';
             } else {
             	echo $FRDay;
             }
       
        }
        echo '</td>';

        if (6 == date('w', mktime(0, 0 , 0, $thismonth, $day, $thisyear)))
            $newrow = true;
            
        if ($FRDay <= 29){
        	$FRDay=$FRDay+1;
           } else {
           	$FRDay=0;
           	}
        }

    $pad = 7 - date('w', mktime(0, 0 , 0, $thismonth, $day, $thisyear));
    if ($pad != 0 && $pad != 7)
        echo "\n\t\t".'<td class="pad" colspan="'.$pad.'">&nbsp;</td>';

    echo "\n\t</tr>\n\t</tbody>\n\t</table>";
}

function fr_get_archives($args = '') {
	parse_str($args, $r);
	if (!isset($r['type'])) $r['type'] = '';
	if (!isset($r['limit'])) $r['limit'] = '';
	if (!isset($r['format'])) $r['format'] = 'html';
	if (!isset($r['before'])) $r['before'] = '';
	if (!isset($r['after'])) $r['after'] = '';
	if (!isset($r['show_post_count'])) $r['show_post_count'] = false;
	get_fr_archives($r['type'], $r['limit'], $r['format'], $r['before'], $r['after'], $r['show_post_count']);
}

function get_fr_archives($type='', $limit='', $format='html', $before = '', $after = '', $show_post_count = false) {
    global $querystring_start, $querystring_equal, $querystring_separator, $month, $wpdb;

    if ('' == $type) {
        $type = get_settings('archive_mode');
    }

    if ('' != $limit) {
        $limit = (int) $limit;
        $limit = ' LIMIT '.$limit;
    }
    // this is what will separate dates on weekly archive links
    $archive_week_separator = '&#8211;';

    // archive link url
    $archive_link_m = get_settings('siteurl').'/'.get_settings('blogfilename').$querystring_start.'m'.$querystring_equal;    # monthly archive;
    $archive_link_w = get_settings('siteurl').'/'.get_settings('blogfilename').$querystring_start.'w'.$querystring_equal;    # weekly archive;
    $archive_link_p = get_settings('siteurl').'/'.get_settings('blogfilename').$querystring_start.'p'.$querystring_equal;    # post-by-post archive;

    // over-ride general date format ? 0 = no: use the date format set in Options, 1 = yes: over-ride
    $archive_date_format_over_ride = 0;

    // options for daily archive (only if you over-ride the general date format)
    $archive_day_date_format = 'Y/m/d';

    // options for weekly archive (only if you over-ride the general date format)
    $archive_week_start_date_format = 'Y/m/d';
    $archive_week_end_date_format   = 'Y/m/d';

    if (!$archive_date_format_over_ride) {
        $archive_day_date_format = get_settings('date_format');
        $archive_week_start_date_format = get_settings('date_format');
        $archive_week_end_date_format = get_settings('date_format');
    }

    $add_hours = intval(get_settings('gmt_offset'));
    $add_minutes = intval(60 * (get_settings('gmt_offset') - $add_hours));

    $now = current_time('mysql');


    if ('monthly' == $type) {
        $arcresults = $wpdb->get_results("SELECT DISTINCT YEAR(post_date) AS `year`, MONTH(post_date) AS `month`, count(ID) as posts FROM $wpdb->posts WHERE post_date < '$now' AND post_status = 'publish' GROUP BY YEAR(post_date), MONTH(post_date) ORDER BY post_date DESC" . $limit);
         if ($arcresults) {
            $afterafter = $after;
            foreach ($arcresults as $arcresult) {
            	           $myarcmonth=$month[zeroise($arcresult->month,2)];
     switch($myarcmonth){
     	    case 'January':
     	        $myarcfrmonth="Hammer";
     	        break;
     	    case 'February':
     	        $myarcfrmonth="Alturiak";
     	        break;
     	    case 'March':
     	        $myarcfrmonth="Ches";
     	        break;
     	    case 'April':
     	        $myarcfrmonth="Tarkash";
     	        break;
     	    case 'May':
     	        $myarcfrmonth="Mirtul";
     	        break;
     	    case 'June':
     	        $myarcfrmonth="Kythorn";
     	        break;
     	    case 'July':
     	        $myarcfrmonth="Flamerule";
     	        break;
     	    case 'August':
     	        $myarcfrmonth="Elesias";
     	        break;
     	    case 'September':
     	        $myarcfrmonth="Eleint";
     	        break;
     	    case 'October':
     	        $myarcfrmonth="Marpenoth";
     	        break;
     	    case 'November':
     	        $myarcfrmonth="Uktar";
     	        break;
     	    case 'December':
     	         $myarcfrmonth="Nightal";
     	        break;	    
     	}
                $url  = get_month_link($arcresult->year,   $arcresult->month);
                if ($show_post_count) {
                    $text = sprintf('%s %d', $myarcfrmonth, ($arcresult->year)-629);
                    $after = '&nbsp;('.$arcresult->posts.')' . $afterafter;
                } else {
                	           $myarcmonth=$month[zeroise($arcresult->month,2)];
     switch($myarcmonth){
     	    case 'January':
     	        $myarcfrmonth="Hammer";
     	        break;
     	    case 'February':
     	        $myarcfrmonth="Alturiak";
     	        break;
     	    case 'March':
     	        $myarcfrmonth="Ches";
     	        break;
     	    case 'April':
     	        $myarcfrmonth="Tarkash";
     	        break;
     	    case 'May':
     	        $myarcfrmonth="Mirtul";
     	        break;
     	    case 'June':
     	        $myarcfrmonth="Kythorn";
     	        break;
     	    case 'July':
     	        $myarcfrmonth="Flamerule";
     	        break;
     	    case 'August':
     	        $myarcfrmonth="Elesias";
     	        break;
     	    case 'September':
     	        $myarcfrmonth="Eleint";
     	        break;
     	    case 'October':
     	        $myarcfrmonth="Marpenoth";
     	        break;
     	    case 'November':
     	        $myarcfrmonth="Uktar";
     	        break;
     	    case 'December':
     	         $myarcfrmonth="Nightal";
     	        break;	    
     	}
                    $text = sprintf('%s %d', $myarcfrmonth, ($arcresult->year)-629);
                }
                echo get_archives_link($url, $text, $format, $before, $after);
            }
        }
    } elseif ('daily' == $type) {
        $arcresults = $wpdb->get_results("SELECT DISTINCT YEAR(post_date) AS `year`, MONTH(post_date) AS `month`, DAYOFMONTH(post_date) AS `dayofmonth` FROM $wpdb->posts WHERE post_date < '$now' AND post_status = 'publish' ORDER BY post_date DESC" . $limit);
        if ($arcresults) {
            foreach ($arcresults as $arcresult) {
                $url  = get_day_link($arcresult->year, $arcresult->month, $arcresult->dayofmonth);
                $date = sprintf("%d-%02d-%02d 00:00:00", $arcresult->year, $arcresult->month, $arcresult->dayofmonth);
                $text = mysql2date($archive_day_date_format, $date);
                echo get_archives_link($url, $text, $format, $before, $after);
            }
        }
    } elseif ('weekly' == $type) {
	$start_of_week = get_settings('start_of_week');
        $arcresults = $wpdb->get_results("SELECT DISTINCT WEEK(post_date, $start_of_week) AS `week`, YEAR(post_date) AS yr, DATE_FORMAT(post_date, '%Y-%m-%d') AS yyyymmdd FROM $wpdb->posts WHERE post_date < '$now' AND post_status = 'publish' ORDER BY post_date DESC" . $limit);
        $arc_w_last = '';
        if ($arcresults) {
            foreach ($arcresults as $arcresult) {
                if ($arcresult->week != $arc_w_last) {
                    $arc_year = $arcresult->yr;
                    $arc_w_last = $arcresult->week;
                    $arc_week = get_weekstartend($arcresult->yyyymmdd, get_settings('start_of_week'));
                    $arc_week_start = date_i18n($archive_week_start_date_format, $arc_week['start']);
                    $arc_week_end = date_i18n($archive_week_end_date_format, $arc_week['end']);
                    $url  = sprintf('%s/%s%sm%s%s%sw%s%d', get_settings('home'), get_settings('blogfilename'), $querystring_start,
                                    $querystring_equal, $arc_year, $querystring_separator,
                                    $querystring_equal, $arcresult->week);
                    $text = $arc_week_start . $archive_week_separator . $arc_week_end;
                    echo get_archives_link($url, $text, $format, $before, $after);
                }
            }
        }
    } elseif ('postbypost' == $type) {
        $arcresults = $wpdb->get_results("SELECT ID, post_date, post_title FROM $wpdb->posts WHERE post_date < '$now' AND post_status = 'publish' ORDER BY post_date DESC" . $limit);
        if ($arcresults) {
            foreach ($arcresults as $arcresult) {
                if ($arcresult->post_date != '0000-00-00 00:00:00') {
                    $url  = get_permalink($arcresult->ID);
                    $arc_title = $arcresult->post_title;
                    if ($arc_title) {
                        $text = strip_tags($arc_title);
                    } else {
                        $text = $arcresult->ID;
                    }
                    echo get_archives_link($url, $text, $format, $before, $after);
                }
            }
        }
    }
}

function fr_title($sep = '&raquo;', $display = true) {
    global $wpdb;
    global $m, $year, $monthnum, $day, $cat, $category_name, $p, $name, $month, $posts;
   wp_title;
    if (!empty($year)) {
        $title = $year-629;
        if (!empty($month)) {
        	switch($month){
     	    case 'January':
     	        $mytitlefrmonth="Hammer";
     	        break;
     	    case 'February':
     	        $mytitlefrmonth="Alturiak";
     	        break;
     	    case 'March':
     	        $mytitlefrmonth="Ches";
     	        break;
     	    case 'April':
     	        $mytitlefrmonth="Tarkash";
     	        break;
     	    case 'May':
     	        $mytitlefrmonth="Mirtul";
     	        break;
     	    case 'June':
     	        $mytitlefrmonth="Kythorn";
     	        break;
     	    case 'July':
     	        $mytitlefrmonth="Flamerule";
     	        break;
     	    case 'August':
     	        $mytitlefrmonth="Elesias";
     	        break;
     	    case 'September':
     	        $mytitlefrmonth="Eleint";
     	        break;
     	    case 'October':
     	        $mytitlefrmonth="Marpenoth";
     	        break;
     	    case 'November':
     	        $mytitlefrmonth="Uktar";
     	        break;
     	    case 'December':
     	         $mytitlefrmonth="Nightal";
     	        break;
     	}	    
            $title .= " $sep ".$mytitlefrmonth;
            //echo $title;
        }    
        }
        if ($display && isset($title)) {
        echo " $sep $title";
    } elseif (!$display && isset($title)) {
        return " $sep $title";
    }
     

}

function nthnum ($age,$small=0) { // proper ending for numbers, ie 2nd, 3rd, 8th
    $last_char_age = substr("$age", -1);
    switch($last_char_age) {
        case '1' :
            $th = 'st';
            break;
        case '2' :
            $th = 'nd';
            break;
        case '3' :
            $th = 'rd';
            break;
        default :
            $th = 'th';
            break;
        }
    if ($age > 10 && $age < 20) $th = 'th';
    if (0 == $small) $niceage = $age.$th;
    if (1 == $small) $niceage = $age."<sup>$th</sup>";
    return $niceage;
    }

?>
