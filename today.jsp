<%-- 
    Document   : today
    Created on : Sep 26, 2020, 9:22:22 PM
    Author     : NUSKY AHAMED
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@page import="java.util.Date"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <% Date date = new Date (); %>
    <body>
        <h1>today date:!</h1>
        <p> today's date is <%=date%> </p>
    </body>
</html>
