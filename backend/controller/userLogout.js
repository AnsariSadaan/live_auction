

export const userLogout = (req, res) => {
    try {
        res.clearCookie("token");
        res.status(200).json({ message: "User logged out successfully." });
    } catch (error) {
        res.status(500).json({ message: "Internal server error", error: error.message });
    }
};
