package com.example.springboot.services;

import com.example.springboot.model.Hello;
import com.example.springboot.model.HelloRepository;
import org.springframework.stereotype.Service;

@Service
public class HelloWorldService {

  private final HelloRepository helloRepository;

  public HelloWorldService(HelloRepository helloRepository) {
    this.helloRepository = helloRepository;
  }

  public String sayHello() {
    return "Hello World from Service!";
  }

  public String saveMessage(String message) {
    Hello hello = new Hello();
    hello.setMessage(message);

    Hello save = this.helloRepository.save(hello);

    return String.valueOf(save.getId());
  }
}
