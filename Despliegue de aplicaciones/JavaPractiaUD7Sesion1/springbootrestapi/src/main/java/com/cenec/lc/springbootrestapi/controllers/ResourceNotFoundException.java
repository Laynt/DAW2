package com.cenec.lc.springbootrestapi.controllers;
import org.springframework.web.bind.annotation.ResponseStatus;

import org.springframework.http.HttpStatus;

@ResponseStatus(value = HttpStatus.NOT_FOUND)
public class ResourceNotFoundException extends Exception {
    
    private static final long serialVersionUID = 1L;
 
    public ResourceNotFoundException(String message){
        super(message);
    }
 
    public ResourceNotFoundException(String message, Exception e){
        super(message, e);
    }
    
    public ResourceNotFoundException(Exception e){
        super(e);
    }
}
