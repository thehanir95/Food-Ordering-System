import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AfterAddingDeliverComponent } from './after-adding-deliver.component';

describe('AfterAddingDeliverComponent', () => {
  let component: AfterAddingDeliverComponent;
  let fixture: ComponentFixture<AfterAddingDeliverComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AfterAddingDeliverComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AfterAddingDeliverComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
