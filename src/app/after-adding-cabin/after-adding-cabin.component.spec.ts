import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AfterAddingCabinComponent } from './after-adding-cabin.component';

describe('AfterAddingCabinComponent', () => {
  let component: AfterAddingCabinComponent;
  let fixture: ComponentFixture<AfterAddingCabinComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AfterAddingCabinComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AfterAddingCabinComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
