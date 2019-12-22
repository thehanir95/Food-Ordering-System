import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AsDeliverComponent } from './as-deliver.component';

describe('AsDeliverComponent', () => {
  let component: AsDeliverComponent;
  let fixture: ComponentFixture<AsDeliverComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AsDeliverComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AsDeliverComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
