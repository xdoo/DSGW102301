package com.example.springboot.model;

import org.springframework.data.repository.CrudRepository;

public interface HelloRepository extends CrudRepository<Hello, Long> {
}
