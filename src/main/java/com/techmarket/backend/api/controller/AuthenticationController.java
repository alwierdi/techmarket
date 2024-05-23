package com.techmarket.backend.api.controller;

import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;
import com.techmarket.backend.api.model.RegistrationBody;
import com.techmarket.backend.service.UserService;



@RestController
@RequestMapping("/auth")
public class AuthenticationController {

    private UserService userService;
    
    public AuthenticationController(UserService userService) {
        this.userService = userService;
    }

    @PostMapping("/register")
    public void registerUser(@RequestBody RegistrationBody registrationBody){
        // System.out.println(registrationBody.getUsername());
        userService.registerUser(registrationBody);
        
    }
}
