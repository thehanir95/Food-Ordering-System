import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HomeComponent } from './home/home.component';
import { AboutComponent } from './about/about.component';
import { CabinComponent } from './cabin/cabin.component';
import { DeliverComponent } from './deliver/deliver.component';
import { CustomerComponent } from './customer/customer.component';
import { SigninComponent } from './signin/signin.component';
import { NewaccComponent } from './newacc/newacc.component';
import { AsCabinComponent } from './as-cabin/as-cabin.component';
import { AsDeliverComponent } from './as-deliver/as-deliver.component';
import { AsCustomerComponent } from './as-customer/as-customer.component';
import { AfterAddingCabinComponent } from './after-adding-cabin/after-adding-cabin.component';
import { AfterAddingCustomerComponent } from './after-adding-customer/after-adding-customer.component';
import { AfterAddingDeliverComponent } from './after-adding-deliver/after-adding-deliver.component';
import { AfterValidCabinComponent } from './after-valid-cabin/after-valid-cabin.component';
import { AfterValidCustomerComponent } from './after-valid-customer/after-valid-customer.component';
import { AfterValidDeliverComponent } from './after-valid-deliver/after-valid-deliver.component';
import { RouterModule } from '@angular/router';

import { FormsModule,ReactiveFormsModule } from '@angular/forms';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';

import { MatSliderModule } from '@angular/material/slider';
import { MatButtonModule } from '@angular/material/button';
import {MatMenuModule} from '@angular/material/menu';
import {MatToolbarModule} from '@angular/material/toolbar'; 
import {MatSidenavModule} from '@angular/material/sidenav';
import {MatFormFieldModule} from '@angular/material/form-field';

import {MatAutocompleteModule} from '@angular/material/autocomplete';
import {MatCheckboxModule} from '@angular/material/checkbox';
import {MatDatepickerModule} from '@angular/material/datepicker';
import {MatInputModule} from '@angular/material/input';
import {MatRadioModule} from '@angular/material/radio';
import {MatSelectModule} from '@angular/material/select';

import {MatSlideToggleModule} from '@angular/material/slide-toggle';
import {MatCardModule} from '@angular/material/card';
import {MatDividerModule} from '@angular/material/divider';
import {MatExpansionModule} from '@angular/material/expansion';
import {MatGridListModule} from '@angular/material/grid-list';
import {MatListModule} from '@angular/material/list';
import {MatStepperModule} from '@angular/material/stepper';
import {MatTabsModule} from '@angular/material/tabs';
import {MatTreeModule} from '@angular/material/tree';

import {MatIconModule} from '@angular/material/icon'; 





import { from } from 'rxjs';


@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    AboutComponent,
    CabinComponent,
    DeliverComponent,
    CustomerComponent,
    SigninComponent,
    NewaccComponent,
    AsCabinComponent,
    AsDeliverComponent,
    AsCustomerComponent,
    AfterAddingCabinComponent,
    AfterAddingCustomerComponent,
    AfterAddingDeliverComponent,
    AfterValidCabinComponent,
    AfterValidCustomerComponent,
    AfterValidDeliverComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    ReactiveFormsModule,
    BrowserAnimationsModule,

    MatSliderModule,
    MatButtonModule,
    MatMenuModule,
    MatToolbarModule,
    MatSidenavModule,
    MatFormFieldModule,
    MatAutocompleteModule,
    MatCheckboxModule,
    MatDatepickerModule,
    MatInputModule,
    MatRadioModule,
    MatSelectModule,
    MatSlideToggleModule,
    MatCardModule,
    MatDividerModule,
    MatExpansionModule,
    MatGridListModule,
    MatListModule,
    MatStepperModule,
    MatTabsModule,
    MatTreeModule,
    MatIconModule
    
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
