import { Pool, Client } from 'pg';
import * as util from "util";
let db, con;

con = new Pool({
  user: 'root',
  host: 'localhost',
  database: 'db_happycode',
  password: '123.',
  port: 5432,
})

export default class database {
  db() {
    db = {
      query(sql, args) {
        return util.promisify(con.query).call(con, sql, args);
      },
      close() {
        return util.promisify(con.end).call(con);
      },
    };
    return db;
  }
}
