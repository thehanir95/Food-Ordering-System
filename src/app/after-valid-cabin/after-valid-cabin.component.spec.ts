import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AfterValidCabinComponent } from './after-valid-cabin.component';

describe('AfterValidCabinComponent', () => {
  let component: AfterValidCabinComponent;
  let fixture: ComponentFixture<AfterValidCabinComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AfterValidCabinComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AfterValidCabinComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
