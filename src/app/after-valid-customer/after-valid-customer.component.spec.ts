import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AfterValidCustomerComponent } from './after-valid-customer.component';

describe('AfterValidCustomerComponent', () => {
  let component: AfterValidCustomerComponent;
  let fixture: ComponentFixture<AfterValidCustomerComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AfterValidCustomerComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AfterValidCustomerComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
