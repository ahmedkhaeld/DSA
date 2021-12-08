package main

import "fmt"

func binarySearch(target int, list []int) bool {

	low := 0
	high := len(list) - 1
	// break down the list into smaller sets until we found the value we looking for
	for low <= high {
		middle := (low + high) / 2

		// if middle is less than target, get rid of the low side, and make it starts from middle +1
		if list[middle] < target {
			low = middle + 1
		} else {
			// else middle is greater than target, get rid of the  high side, and make it starts from middle -1
			high = middle - 1
		}
	}

	if low == len(list) || list[low] != target {
		return false
	}

	return true
}

func main() {
	items := []int{1, 2, 9, 20, 31, 45, 63, 70, 100}

	fmt.Printf("Is number in the list? %v", binarySearch(63, items))
}
