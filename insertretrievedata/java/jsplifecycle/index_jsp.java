//initailied

public void jspInit() { 
    System.out.println("JSP Initialized!"); 
}

//exucute
public void _jspService(HttpServletRequest request, HttpServletResponse response) {
    response.getWriter().println("Hello, JSP!");
}


//destroy

public void jspDestroy() { 
    System.out.println("JSP Destroyed!"); 
}
