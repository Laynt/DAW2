import { ComponentFixture, TestBed } from '@angular/core/testing';

import { EjemplongComponent } from './ejemplong.component';

describe('EjemplongComponent', () => {
  let component: EjemplongComponent;
  let fixture: ComponentFixture<EjemplongComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ EjemplongComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(EjemplongComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
