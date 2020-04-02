import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AfterValidDeliverComponent } from './after-valid-deliver.component';

describe('AfterValidDeliverComponent', () => {
  let component: AfterValidDeliverComponent;
  let fixture: ComponentFixture<AfterValidDeliverComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AfterValidDeliverComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AfterValidDeliverComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
