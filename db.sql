/** Table **/

#users[id, username, email, password, fullname, gender, postaladdress, rdate]
#usertype[id, usertype]
#cabin[id, name, details, quantity]
#cabintype[id, name]
#cabinimages[id, name, cid];
#cabinprices[id, price, interval, cid, ticket]
#currency[id, name, rate]
#plan[id, name]
#topics[id, title, description, uid, cdate]
#message[id, msg, uid, tid, cdate]
#bookings[id, startdate, enddate, cid, uid]
#extraticket[id, startdate, enddate, cid]
