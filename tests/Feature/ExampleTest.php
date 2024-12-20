<?php

describe('crud', function () {
  it('create', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
  })->issue(1)->note('This test is not implemented yet');

  it('udpate', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
  })->issue(2)->note('This test is not implemented yet');
})->todo(assignee: 'aleduca', pr: 2);
