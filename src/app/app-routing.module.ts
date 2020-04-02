import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomeComponent } from './home/home.component';
import { AboutComponent } from './about/about.component';
import { CabinComponent } from './cabin/cabin.component';
import { DeliverComponent } from './deliver/deliver.component';
import { CustomerComponent } from './customer/customer.component';
import { SigninComponent } from './signin/signin.component';
import { AsCabinComponent } from './as-cabin/as-cabin.component';
import { AsCustomerComponent } from './as-customer/as-customer.component';
import { AsDeliverComponent } from './as-deliver/as-deliver.component';
import { NewaccComponent } from './newacc/newacc.component';
import { AfterAddingCabinComponent } from './after-adding-cabin/after-adding-cabin.component';
import { AfterAddingDeliverComponent } from './after-adding-deliver/after-adding-deliver.component';
import { AfterAddingCustomerComponent } from './after-adding-customer/after-adding-customer.component';
import { AfterValidCabinComponent } from './after-valid-cabin/after-valid-cabin.component';
import { AfterValidCustomerComponent } from './after-valid-customer/after-valid-customer.component';
import { AfterValidDeliverComponent } from './after-valid-deliver/after-valid-deliver.component';
import { from } from 'rxjs';

const routes: Routes = [
  {path: 'home' , component:HomeComponent},
  {path: 'about' , component:AboutComponent},
  {path: 'cabin' , component:CabinComponent},
  {path: 'deliver' , component:DeliverComponent},
  {path: 'customer' , component:CustomerComponent},
  {path: 'signin' , component:SigninComponent},
  {path : 'as-cabin' , component : AsCabinComponent },
  {path : 'as-customer' , component : AsCustomerComponent },
  {path : 'as-deliver' , component : AsDeliverComponent },
  {path : 'newacc' , component : NewaccComponent },
  {path : 'after-adding-cabin' , component :AfterAddingCabinComponent},
  {path : 'after-adding-deliver' , component :AfterAddingDeliverComponent},
  {path : 'after-adding-customer' , component :AfterAddingCustomerComponent},
  {path : 'after-valid-cabin' , component :AfterValidCabinComponent},
  {path : 'after-valid-customer' , component :AfterValidCustomerComponent},
  {path : 'after-valid-deliver' , component :AfterValidDeliverComponent}
  

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
