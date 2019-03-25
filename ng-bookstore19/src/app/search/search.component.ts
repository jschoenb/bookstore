import {Component, OnInit, EventEmitter} from '@angular/core';
import {debounceTime, distinctUntilChanged, switchMap} from "rxjs/internal/operators";
import {BookStoreService} from "../shared/book-store.service";
import {Book} from "../shared/book";

@Component({
  selector: 'bs-search',
  templateUrl: './search.component.html',
  styles: []
})
export class SearchComponent implements OnInit {

  constructor(private bs: BookStoreService) { }

  keyup = new EventEmitter<string>();
  foundBooks: Book[] = [];

  ngOnInit() {
    this.keyup
        .pipe(debounceTime(500))
        .pipe(distinctUntilChanged())
        .pipe(switchMap(searchTerm => this.bs.getAllSearch(searchTerm)))
        .subscribe((books) => {this.foundBooks = books; console.log(this.foundBooks);});
  }

}
