package com.example.springboot.api;

import com.example.springboot.services.HelloWorldService;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class HelloWorldController {

  private final HelloWorldService helloWorldService;

  public HelloWorldController(HelloWorldService helloWorldService) {
    this.helloWorldService = helloWorldService;
  }

  @GetMapping("/hello")
  public String hello() {
    return this.helloWorldService.sayHello();
  }

  @GetMapping("/hello/{message}")
  public String hello(@PathVariable String message) {
    return this.helloWorldService.saveMessage(message);
  }
}
