/* tslint:disable:no-unused-variable */
import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { By } from '@angular/platform-browser';
import { DebugElement } from '@angular/core';

import { Contacto2Component } from './contacto2.component';

describe('Contacto2Component', () => {
  let component: Contacto2Component;
  let fixture: ComponentFixture<Contacto2Component>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ Contacto2Component ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(Contacto2Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
