<%
session.setAttribute("user", "JohnDoe");  // Store user in session
String user = (String) session.getAttribute("user");  // Retrieve user
out.print("Logged in as: " + user);
%>
