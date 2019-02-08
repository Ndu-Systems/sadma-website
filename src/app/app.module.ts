import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { declarations, AppRouting } from './app.routing';
 

@NgModule({
   declarations: [
      AppComponent,
      ...declarations
   ],
   imports: [
      BrowserModule,
      AppRouting
   ],
   providers: [],
   bootstrap: [
      AppComponent
   ]
})
export class AppModule { }
