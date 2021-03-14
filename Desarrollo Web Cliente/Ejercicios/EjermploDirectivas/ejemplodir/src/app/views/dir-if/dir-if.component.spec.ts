/* tslint:disable:no-unused-variable */
import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { By } from '@angular/platform-browser';
import { DebugElement } from '@angular/core';

import { DirIfComponent } from './dir-if.component';

describe('DirIfComponent', () => {
  let component: DirIfComponent;
  let fixture: ComponentFixture<DirIfComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ DirIfComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(DirIfComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
