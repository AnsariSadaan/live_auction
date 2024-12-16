import JWT from "jsonwebtoken";

export const authToken = (req, res, next) => {
    try {
        const token =
            req.cookies?.token || req.header("Authorization")?.replace("Bearer ", "");

        if (!token) {
            return res.status(401).json({ message: "Unauthorized access. Please log in." });
        }

        JWT.verify(token, process.env.TOKEN_SECRET_KEY, (err, decoded) => {
            if (err) {
                return res.status(403).json({ message: "Invalid or expired token." });
            }
            req.userId = decoded._id;
            next();
        });
    } catch (error) {
        res.status(500).json({ message: "Internal server error", error: error.message });
    }
};
