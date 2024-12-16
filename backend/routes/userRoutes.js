import express from "express";

import { authToken } from "../middleware/authToken.js";
import {userRegister} from '../controller/userRegister.js'
import {userLogin} from '../controller/userLogin.js';
import {userLogout} from '../controller/userLogout.js'

const router = express.Router();

router.post("/register", userRegister);
router.post("/login", userLogin);
router.post("/logout", authToken, userLogout);

export default router;