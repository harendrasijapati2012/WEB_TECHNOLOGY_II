import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.Cookie;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;



@WebServlet("/SetCookieServlet")
public class SetCookieServlet extends HttpServlet {
    protected void doGet(HttpServletRequest request, HttpServletResponse response) 
            throws ServletException, IOException {
        // Create a cookie
        Cookie userCookie = new Cookie("username", "JohnDoe");

        // Set cookie expiry time (7 days)
        userCookie.setMaxAge(7 * 24 * 60 * 60);

        // Add cookie to response
        response.addCookie(userCookie);

        // Response to the user
        response.getWriter().println("Cookie has been set for the user.");
    }
}


//reterive cokkies in servlet

@WebServlet("/GetCookieServlet")
public class GetCookieServlet extends HttpServlet {
    protected void doGet(HttpServletRequest request, HttpServletResponse response) 
            throws ServletException, IOException {
        // Get all cookies
        Cookie[] cookies = request.getCookies();

        // Check if cookies exist
        if (cookies != null) {
            for (Cookie cookie : cookies) {
                if (cookie.getName().equals("username")) {
                    response.getWriter().println("Welcome back, " + cookie.getValue());
                    return;
                }
            }
        }

        response.getWriter().println("No cookies found!");
    }
}
