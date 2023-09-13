import database from "../config/mariadb";
import { unlinkSync,existsSync,readdirSync,lstatSync,rmdirSync } from "fs";
import * as path from "path";
let results,query,connec,db,m,random,id;
connec = new database();
db = connec.db();
export default class model {
  async auth(username, password) {
    try {
      query = "SELECT `id`, `email`, `username`, `photo`, `fullname` FROM `tb_users` WHERE `username`='"+username+"' AND password='"+password+"' LIMIT 1;";
      results = await new Promise((resolve, reject) =>
        db.query(query, (err, results) => {
          if (!err) {
            if (results.length) {
              results = { status: true, data: results[0] };
            } else {
              results = { status: false, data: [] };
            }
            resolve(results);
          }
        })
      );
      return results;
    } catch (error) {
      console.log(error);
    }
  }

  async list(id) {
    try {
      if(id){
        query = "SELECT * FROM `tb_users` WHERE `id`='"+id+"';";
      }else{
        query = "SELECT * FROM `tb_users`;";
      }
      results = await new Promise((resolve, reject) =>
        db.query(query, (err, results) => {
          if (!err) {
            if (results.length) {
              results = { status: true, data: results };
            } else {
              results = { status: false, data: [] };
            }
            resolve(results);
          }
        })
      );
      return results;
    } catch (error) {
      console.log(error);
    }
  }

  async add(email, username, photo, fullname, password) {
    try {
      id = random(8)
      query = "INSERT INTO `tb_users`(`id`, `email`, `username`, `photo`, `fullname`, `password`) VALUES ('"+id+"','"+email+"','"+username+"','"+photo+"','"+fullname+"','"+password+"')";
      results = await new Promise((resolve, reject) =>
        db.query(query, (err, results) => {
          if (err) throw err;
          results = { status: true, data: "success add" };
          resolve(results);
        })
      );
      return results;
    } catch (error) {}
  }

  async update(id, email, username, photo, fullname, password) {
    try {
      query = "UPDATE `tb_users` SET `email`='"+email+"',`username`='"+username+"',`photo`='"+photo+"',`fullname`='"+fullname+"',`password`='"+password+"' WHERE `id`='"+id+"'";
      results = await new Promise((resolve, reject) =>
        db.query(query, (err, results) => {
          if (err) throw err;
          results = { status: true, data: "success update" };
          resolve(results);
        })
      );
      return results;
    } catch (error) {}
  }

  async delete(id) {
    try {
      query = "DELETE FROM `tb_users` WHERE `id`='"+id+"'";
      results = await new Promise((resolve, reject) =>
        db.query(query, (err, results) => {
          if (err) throw err;
          results = { status: true, data: "success delete" };
          resolve(results);
        })
      );
      return results;
    } catch (error) {}
  }
}

random = function (length) {
  results = "";
  const number = "1234567890";
  const numberLength = number.length;
  for (var i = 0; i < length; i++) {
    results += number.charAt(Math.floor(Math.random() * numberLength));
  }
  return results;
};