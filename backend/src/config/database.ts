import * as mysql from "mysql";
import * as util from "util";
import * as queues from "mysql-queues";
let db, con;
con = mysql.createConnection({
  host: "127.0.0.1",
  user: "root",
  password: "",
  database: "db_happycode",
  port: 3306,
  waitForConnections: true,
  connectionLimit: 100,
  maxIdle: 10,
  idleTimeout: 60000,
  queueLimit: 0,
  charset: "utf8mb4",
});
queues(con, true);
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
