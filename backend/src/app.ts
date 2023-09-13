import * as express from "express";
import * as cors from "cors";
import * as path from "path";
import * as queue from "express-queue";
import * as os from "os";
import * as multer from "multer";
import { mkdirSync,createWriteStream } from "fs";
// import model from "./models/index_mariadb";
import model from "./models/index_postgresql";
let app, port, rout, que, m, member, timeout, id, email, username, password, fullname, photo;


que = queue({
activeLimit: 2,
  queuedLimit: 6,
  rejectHandler: (req, res) => {
    res.sendStatus(500);
  },
});
port = 3000;

app = express();
app.use(cors());
app.use(express.json());
app.use(que);
app.use(express.urlencoded({ extended: true }));
app.use("/file", express.static(path.join(__dirname, "/files/")));
rout = new model();

app.get("/", async function (req, res) {
  res.send("port");
});

app.get("/auth", async function (req, res) {
  username = req.query.username;
  password = req.query.password;
  m = await rout.auth(username, password);
  timeout = 200;
    try {
      if(m["status"] === true){
        res.status(200).json({ status: true, message:'data found', data: m["data"] });
      }else{
        res.status(200).json({ status: false, message:'data not found', data: [] });
      }
    } catch (error) {
      res.status(200).json({ status: false, message:'error', data: error });
    }
});

app.get("/user", async function (req, res) {
  id = req.query.id;
  m = await rout.list(id);
    timeout = 200;
    try {
      if(m["status"] === true){
        res.status(200).json({ status: true, message:'data found', data: m["data"] });
      }else{
        res.status(200).json({ status: false, message:'data not found', data: [] });
      }
    } catch (error) {
      res.status(200).json({ status: false, message:'error', data: error });
    }
});

app.post("/user", async function (req, res) {
  email = req.body.email;
  username = req.body.username;
  photo = req.body.photo;
  fullname = req.body.fullname;
  password = req.body.password;
  m = await rout.add(email, username, photo, fullname, password);
  timeout = 200;
  try {
    if(m["status"] === true){
      res.status(200).json({ status: true, message:m["data"] });
    }else{
      res.status(200).json({ status: false, message:'failed add'});
    }
  } catch (error) {
    res.status(200).json({ status: false, message:'error' });
  }
});

app.put("/user", async function (req, res) {
  id = req.body.id;
  email = req.body.email;
  username = req.body.username;
  photo = req.body.photo;
  fullname = req.body.fullname;
  password = req.body.password;
  m = await rout.update(id, email, username, photo, fullname, password);
  timeout = 200;
  try {
    if(m["status"] === true){
      res.status(200).json({ status: true, message:m["data"] });
    }else{
      res.status(200).json({ status: false, message:'failed update' });
    }
  } catch (error) {
    res.status(200).json({ status: false, message:'error' });
  }
});

app.delete("/user", async function (req, res) {
  id = req.query.id;
  m = await rout.delete(id);
  timeout = 200;
  try {
    if(m["status"] === true){
      res.status(200).json({ status: true, message:m["data"] });
    }else{
      res.status(200).json({ status: false, message:'failed delete' });
    }
  } catch (error) {
    res.status(200).json({ status: false, message:'error' });
  }
});

var UPLOAD_PATH = "./files/";

var storage = multer.diskStorage({
  destination: function (req, file, cb) {
    mkdirSync(UPLOAD_PATH, { recursive: true })
    cb(null, UPLOAD_PATH)
  },
  filename: function (req, file, cb) {
    const uniqueSuffix = Date.now() + '-' + Math.round(Math.random() * 1E9)
    cb(null, file.originalname)
  }
})

var upload = multer({ storage: storage })

var multipartReqInterceptor = function(req, res, next) {
  next();
};
var multipartUploadHandlerprofil = function(req, res) {
  console.log(req.files[0]);
  res.json({
      status: true,
      message: "upload completed successfully",
      file: req.files[0].originalname
  });
};
app.post('/upload/profil', multipartReqInterceptor, upload.any(), multipartUploadHandlerprofil);

console.info("developer by : baguspras");
console.info("run http://localhost:3000");
console.info("folder file public http://localhost:3000/file");
console.log(`queueLength: ${que.queue.getLength()}`);
app.listen(port);
// astrojs  