package com.TechMarket.TechMarketProto.api.controller.auth;

import com.TechMarket.TechMarketProto.api.model.LoginBody;
import com.TechMarket.TechMarketProto.api.model.LoginResponse;
import com.TechMarket.TechMarketProto.api.model.RegistrationBody;
import com.TechMarket.TechMarketProto.entity.LocalUser;
import com.TechMarket.TechMarketProto.exception.UserAlreadyExistsException;
import com.TechMarket.TechMarketProto.service.UserService;
import jakarta.validation.Valid;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.security.core.annotation.AuthenticationPrincipal;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;

@RestController
@RequestMapping("/auth")
public class AuthenticationController {

    private UserService userService;

    @Autowired
    public AuthenticationController(UserService userService) {
        this.userService = userService;
    }

    @PostMapping("/register")
    public ResponseEntity registerUser(@Valid @RequestBody RegistrationBody registrationBody) {
        try {
            userService.registerUser(registrationBody);
            return ResponseEntity.ok().build();
        } catch (UserAlreadyExistsException e) {
            return ResponseEntity.status(HttpStatus.CONFLICT).build();
        }
    }

    @PostMapping("/login")
    public ResponseEntity<LoginResponse> postMethodName(@Valid @RequestBody LoginBody loginBody) {
        // TODO: process POST request
        String jwt = userService.loginUser(loginBody);
        if (jwt == null) {
            return ResponseEntity.status(HttpStatus.BAD_REQUEST).build();
        } else {
            LoginResponse response = new LoginResponse();
            response.setJwt(jwt);
            return ResponseEntity.ok(response);
        }
    }

    @GetMapping("/me")
    public LocalUser getLoggedUser(@AuthenticationPrincipal LocalUser user) {
        return user;
    }

}
