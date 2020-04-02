import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AfterAddingCustomerComponent } from './after-adding-customer.component';

describe('AfterAddingCustomerComponent', () => {
  let component: AfterAddingCustomerComponent;
  let fixture: ComponentFixture<AfterAddingCustomerComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AfterAddingCustomerComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AfterAddingCustomerComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
